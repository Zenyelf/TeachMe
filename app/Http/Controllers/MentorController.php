<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function dashboard() 
{
    $mentor = auth()->user()->mentor;

    $myCourses = $mentor->courses()
        ->withCount('enrollments') 
        ->orderBy('created_at', 'desc') // Limit to 4 for the dashboard grid
        ->get();

    // Count all courses belonging to this mentor
    $activeCoursesCount = $mentor->courses()->count();

    // If you want to be specific (e.g., only published courses):
    // $activeCoursesCount = $mentor->courses()->where('status', 'published')->count();

    // Keep your existing logic...
    $courseIds = $mentor->courses()->pluck('id');
    $totalStudents = $courseIds->isNotEmpty() 
        ? \App\Models\Enrollment::whereIn('course_id', $courseIds)->distinct('user_id')->count() 
        : 0;

    $recentMessages = Message::with('sender')
        ->where('receiver_id', Auth::id())
        ->orderBy('created_at', 'desc')
        ->get()
        ->unique('sender_id') // Only show the latest message per student
        ->take(4); // Only show the top 4 on the dashboard  

    return view('mentor.dashboard', compact(
        'recentMessages', 
        'totalStudents', 
        'activeCoursesCount', 
        'myCourses'
    ));
}

    public function myCourses()
{
    $mentor = auth()->user()->mentor;

    // Fetch all courses for this mentor with student counts
    $courses = $mentor->courses()
        ->withCount('enrollments')
        ->orderBy('created_at', 'desc')
        ->paginate(10); // Use pagination for the full list page

    return view('mentor.courses.index', compact('courses'));
}

    public function myBookings(){
        # mentor bookings bang
    }

    public function setAvailability(Request $request){
        # set teaching schedule
    }

    public function profile(){
        return view('mentor.profile');
    }

    public function earnings(){
        return view('mentor.earnings');
    }

    public function schedule(){
        return view('mentor.schedule');
    }

    public function live(){
        return view('mentor.live');
    }

    public function createCourse(){
        return view('mentor.newcourse');
    }
}