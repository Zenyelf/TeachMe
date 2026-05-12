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
    if (!Auth::check()) {
        return redirect()->route('login')
            ->with('error', 'You must be logged in to enroll in a course.');
    }

    // 1. Make sure at least one batch was selected
    $request->validate([
        'batch_ids'   => 'required|array|min:1',
        'batch_ids.*' => 'exists:course_sessions,id',
    ]);

    $user = Auth::user();
    $enrolledBatches = [];
    $skippedBatches  = [];

    // 2. Loop through each selected batch
    foreach ($request->batch_ids as $sessionId) {

        $alreadyEnrolled = Enrollment::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->where('session_id', $sessionId)
            ->exists();

        if ($alreadyEnrolled) {
            $skippedBatches[] = $sessionId;
            continue;
        }

        Enrollment::create([
            'user_id'    => $user->id,
            'course_id'  => $course->id,
            'session_id' => $sessionId,
            'status'     => 'active',
            'progress_percent' => 0,
            'enrolled_at'=> now(),
        ]);

        $enrolledBatches[] = $sessionId;
    }

    if (!empty($enrolledBatches)) {
        $earned = $course->price * count($enrolledBatches);

        \App\Models\Mentor::where('user_id', $course->mentor_id)->increment('revenue', $earned);
    }

    // 3. Build feedback message
    if (empty($enrolledBatches) && !empty($skippedBatches)) {
        return redirect()->back()
            ->with('info', 'You are already enrolled in all selected batches.');
    }

    return redirect()->route('student.mycourse')
        ->with('success', 'You have successfully enrolled in ' . count($enrolledBatches) . ' batch(es) of ' . $course->title . '!');
}
}