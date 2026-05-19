<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Review;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    // 1. Show the Review Page
    public function create(Course $course)
    {
        $user = Auth::user();
        
        // Check if they already reviewed it (so they can edit their existing review)
        $existingReview = Review::where('user_id', $user->id)
            ->where('course_id', $course->id)
            ->first();

        return view('student.review', compact('course', 'existingReview'));
    }

    // 2. Save the Review and Auto-Calculate
    public function store(Request $request, Course $course)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string|max:1000',
        ]);

        $user = Auth::user();

        // Security Check: Are they at 100% progress?
        $enrollment = Enrollment::where('user_id', $user->id)->where('course_id', $course->id)->first();
        if (!$enrollment || $enrollment->progress_percent < 100) {
            abort(403, 'Unauthorized. Course not completed.');
        }

        // Save the Review
        $existingReview = Review::where('user_id', $user->id)->where('course_id', $course->id)->first();

        if ($existingReview) {
            $existingReview->update([
                'rating' => $request->rating,
                'comment' => $request->comment
            ]);
        } else {
            $reviewId = 'R' . date('YmdHis') . rand(10, 99);
            Review::create([
                'id' => $reviewId,
                'user_id' => $user->id,
                'course_id' => $course->id,
                'mentor_id' => $course->mentor_id,
                'rating' => $request->rating,
                'comment' => $request->comment
            ]);
        }

        // AUTO-CALCULATE COURSE RATING
        $averageRating = Review::where('course_id', $course->id)->avg('rating');
        
        $course->update([
            'rating' => $averageRating
        ]);

        return redirect()->route('student.mycourse')->with('success', 'Thank you! Your review has been saved.');
    }
}