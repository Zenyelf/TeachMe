<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function dashboard() 
{
    // Grab the latest messages sent to this mentor, organized by sender
    $recentMessages = Message::with('sender')
        ->where('receiver_id', Auth::id())
        ->orderBy('created_at', 'desc')
        ->get()
        ->unique('sender_id') // Only show the latest message per student
        ->take(4); // Only show the top 4 on the dashboard

    return view('mentor.dashboard', compact('recentMessages'));
}

    public function myCourses(){
        # list mentor courses
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
