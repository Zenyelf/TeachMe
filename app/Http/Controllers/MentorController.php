<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function dashboard(){
        return view('mentor.dashboard');
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
