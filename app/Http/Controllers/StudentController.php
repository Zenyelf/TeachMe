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
        $user = auth()->user();
        
        // Pastikan nama file view-nya benar (student/profile.blade.php)
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

        // 1. Logic Upload Foto
        $avatarPath = $user->student->avatar ?? null; // Ambil foto lama dari tabel student

        if ($request->hasFile('avatar')) {
            $fileName = 'PP_' . $user->id . '.jpg';
            
            // Pindahkan file ke folder storage/app/public/avatars
            $request->avatar->move(storage_path('app/public/avatars'), $fileName);

            // Simpan path untuk tabel students
            $avatarPath = "avatars/{$fileName}";
        }

        // 2. Update data di table USERS (Hanya kolom yang ada di users)
        $user->name = $request->name;
        $user->save(); 

        // 3. Update data di table STUDENTS (Simpan major, mode, dan AVATAR di sini)
        $user->student()->updateOrCreate(
            ['user_id' => $user->id],
            [
                'major' => $request->major,
                'learning_mode' => $request->learning_mode,
                'avatar' => $avatarPath, // Sekarang avatar masuk ke laci yang benar (tabel students)
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