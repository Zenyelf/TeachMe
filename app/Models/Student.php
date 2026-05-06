<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    // Agar ID bisa menggunakan string
    public $incrementing = false;
    protected $keyType = 'string';

    // Daftar kolom yang boleh diisi
    protected $fillable = ['id', 'user_id', 'major', 'learning_mode'];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // --- Method asli kamu tetap di bawah ini --- //

    public function BrowseCourses(){
        #something
    }

    public function SearchCourse($keyword){
        #something
    }

    public function ViewCourse($course_id){
        #something
    }

    public function BookCourse($course_id, $schedule){
        #something
    }

    public function CancelBooking($booking_id){
        #something
    }

    public function ViewBookings(){
        #something
    }

    public function MessageMentor($mentor_id){
        #something
    }
}