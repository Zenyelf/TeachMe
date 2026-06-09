<?php

namespace App\Http\Controllers;

use App\Models\Mentor;
use App\Models\Course;
use App\Models\Feedback;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private function requireAdmin(): void
    {
        if (auth()->user()->role !== 'Admin') {
            abort(403, 'Unauthorized access.');
        }
    }

    public function index()
    {
        // Absolute check to ensure non-admins get locked out
        if (auth()->user()->role !== 'Admin') {
            abort(403, 'Unauthorized access.');
        }

        // Get mentors from the database, newest registrations first
        $mentors = Mentor::with('user')->latest()->get();

        return view('admin.admin', compact('mentors'));
    }

    public function toggleVerify($id)
    {
        if (auth()->user()->role !== 'Admin') {
            abort(403, 'Unauthorized access.');
        }

        $mentor = Mentor::findOrFail($id);

        // Toggle verification strings ('0' -> '1' and vice-versa)
        if ($mentor->verify === '1') {
            $mentor->verify = '0';
            $msg = 'Verification canceled.';
        } else {
            $mentor->verify = '1';
            $msg = 'Mentor approved successfully!';
        }

        $mentor->save();

        return redirect()->back()->with('success', $msg);
    }

    public function courses()
    {
        $this->requireAdmin();
 
        // Group by status so the view can render pending ones first
        $courses = Course::with('mentor.user', 'category')
            ->latest()
            ->get();
 
        return view('admin.courses', compact('courses'));
    }
 
    public function updateCourseStatus(Request $request, $id)
    {
        $this->requireAdmin();
 
        $request->validate([
            'status' => 'required|in:approved,rejected,pending',
        ]);
 
        $course = Course::findOrFail($id);
        $course->status = $request->status;
        $course->save();
 
        $labels = [
            'approved' => 'Course approved — it is now visible to students.',
            'rejected' => 'Course rejected.',
            'pending'  => 'Course status reset to pending.',
        ];
 
        return redirect()->back()->with('success', $labels[$request->status]);
    }

    public function feedbacks()
    {
        $this->requireAdmin();
 
        $feedbacks = Feedback::with('user')
            ->latest()
            ->paginate(15);
 
        return view('admin.feedbacks', compact('feedbacks'));
    }
}