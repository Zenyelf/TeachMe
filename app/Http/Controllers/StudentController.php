<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <-- Added this import

class StudentController extends Controller
{
    public function dashboard(){
        return view('student.dashboard');
    }

    public function browseCourses(){
        # show all courses
    }

    public function myBookings(){
        # student bookings
    }

    public function profile(){
    $user = Auth::user();

    return view('student.profile', compact('user'));
}
}