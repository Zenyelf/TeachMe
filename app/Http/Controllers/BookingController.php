<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function bookCourse($course_id){
        # student books a course test
    }

    public function store(Request $request){
        # save booking
    }

    public function cancel($booking_id){
        # cancel booking
    }

    public function confirm($booking_id){
        # mentor confirms booking
    }

    public function complete($booking_id){
        # mark lesson completed
    }

    public function myBookings(){
        # show bookings for current user
    }
}
