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

    public function profile()
{
    // Auth::user() mengambil SATU objek user yang sedang login
    $user = Auth::user(); 
    
    return view('student.profile', compact('user'));
}

    public function updateProfile(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required|string|max:255',
        'major' => 'nullable|string|max:255',
        'learning_mode' => 'nullable|string',
        'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    if ($request->hasFile('avatar')) {
        $file = $request->file('avatar');
        $fileName = 'PP_' . $user->id . '.' . $file->getClientOriginalExtension();
        $file->move(storage_path('app/public/avatars'), $fileName);
        $user->avatar = $fileName;
    }

    $user->name = $request->name;
    $user->save(); 

    $user->student()->updateOrCreate(
        ['user_id' => $user->id],
        [
            'interest' => $request->interest,
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
            ->where('progress_percent', '<', 100)
            ->latest('enrolled_at')
            ->get();
    
        $completedCourses = $user->student->enrollments()  
            ->with(['mentor.user', 'category'])
            ->where('progress_percent', 100)
            ->latest('enrolled_at')
            ->get();
    
        return view('student.mycourse', compact('enrolledCourses', 'completedCourses'));

    }
}