<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnrollmentController extends Controller
{
    /**
     * Store a new enrollment in the database.
     */
    public function store(Request $request, Course $course)
    {
        // 1. Ensure the user is logged in
        if (!Auth::check()) {
            return redirect()->route('login')
                ->with('error', 'You must be logged in to enroll in a course.');
        }

        $user = Auth::user();

        // 2. Check if the user is already enrolled
        $alreadyEnrolled = Enrollment::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->exists();

        if ($alreadyEnrolled) {
            return redirect()->back()
                ->with('info', 'You are already enrolled in this course.');
        }

        // 3. Create the Enrollment record
        try {
            Enrollment::create([
                'user_id' => $user->id,
                'course_id' => $course->id,
                'status' => 'active', // Default status
                'enrolled_at' => now(),
            ]);

            // 4. Redirect to a "My Learning" page or the course player
            return redirect()->route('dashboard') 
                ->with('success', 'Congratulations! You have successfully enrolled in ' . $course->title);
                
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Something went wrong. Please try again later.');
        }
    }
}