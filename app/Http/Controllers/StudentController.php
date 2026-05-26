<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    private function syncProgress($user): void
    {
        $allEnrolled = $user->student->enrollments()
            ->orderByPivot('enrolled_at', 'desc')
            ->get();

        $allEnrolled->each(function ($course) use ($user) {
            $session = \App\Models\CourseSession::find($course->pivot->session_id);
            if ($session) {
                $progress = $session->calculateProgress();
                \App\Models\Enrollment::where('id', $course->pivot->id)
                    ->update([
                        'progress_percent' => $progress,
                        'status'           => $progress >= 100 ? 'completed' : 'active',
                    ]);
            }
        });
    }

    public function dashboard(){
        $user = auth()->user();
        $this->syncProgress($user);
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
        $fileName = 'PP_' . $user->id . '.' . jpg;
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
        $this->syncProgress($user);
        
        $allEnrolled = $user->student->enrollments()
            ->with(['mentor.user', 'category'])
            ->orderByPivot('enrolled_at', 'desc') 
            ->get();
    
        $allEnrolled->each(function ($course) use ($user) {
            $session = \App\Models\CourseSession::find($course->pivot->session_id);
            if ($session) {
                $progress = $session->calculateProgress();

                // 1. Update in memory → for the view rendered this request
                $course->pivot->progress_percent = $progress;

                // 2. Persist to DB → so it's saved for next time
                $affected = \App\Models\Enrollment::where('id', $course->pivot->id)
                    ->update([
                        'progress_percent' => $progress,
                        'status'=> $progress >= 100 ? 'completed' : 'active',
                        ]);
            }
        });

        // Split AFTER calculating, not in the DB query
        $enrolledCourses  = $allEnrolled->filter(fn($c) => $c->pivot->progress_percent < 100)->values();
        $completedCourses = $allEnrolled->filter(fn($c) => $c->pivot->progress_percent >= 100)->values();

        return view('student.mycourse', compact('enrolledCourses', 'completedCourses'));
    }
}