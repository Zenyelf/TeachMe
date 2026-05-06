<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    public function dashboard(){
        $user = auth()->user();

        // 1. Get IDs of courses the student is already in
        $enrolledIds = $user->student->enrollments()->pluck('courses.id');

        // 2. Fetch 4 random courses NOT in that list
        $recommendations = \App\Models\Course::whereNotIn('id', $enrolledIds)
            ->with(['mentor.user', 'category'])
            ->inRandomOrder()
            ->take(4)
            ->get();

        // 3. Keep your existing enrolled courses logic
        $enrolledCourses = $user->student->enrollments()
            ->with(['mentor.user', 'category'])
            ->latest('enrolled_at')
            ->take(3)
            ->get();

        return view('student.dashboard', compact('enrolledCourses', 'recommendations'));
    }

    public function updateProfile(Request $request){
        $user = Auth::user();

        $request->validate([
            'name' => 'required|string|max:255',
            'major' => 'nullable|string|max:255',
            'learning_mode' => 'nullable|string',
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // 1. Photo Upload Logic
        if ($request->hasFile('avatar')) {
            // Create the custom filename: PP_USERID.extension
            $fileName = 'PP_' . $user->id . '.' . "jpg";

            // OPTIONAL: Delete old avatar file from storage if it exists 
            // and if it has a different extension than the new one
            if ($user->avatar && $user->avatar !== $fileName) {
                $oldPath = storage_path('app/public/avatars/' . $user->avatar);
                if (file_exists($oldPath)) {
                    unlink($oldPath);
                }
            }

            // Move to folder: storage/app/public/avatars
            $request->avatar->move(storage_path('app/public/avatars'), $fileName);

            // Save ONLY the filename to the database
            $user->avatar = "avatars/{$fileName}";
        }

        // 2. Update User data
        $user->name = $request->name;
        $user->save();

        // 3. Update Student data
        $user->student()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'id' => $user->id, // Assuming student ID is same as user ID based on your snippet
                'major' => $request->major,
                'learning_mode' => $request->learning_mode,
            ]
        );

        return redirect()->back()->with('success', 'Profil berhasil diperbarui!');
    }

    public function myCourse(){
        $user = auth()->user();
    
    // Fetch all courses the student is enrolled in
    $enrolledCourses = $user->student->enrollments()
        ->with(['mentor.user', 'category'])
        ->latest('enrolled_at')
        ->get();

    return view('student.mycourse', compact('enrolledCourses'));
    }
}