<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    // Agar ID bisa menggunakan string
    public $incrementing = false;
    protected $keyType = 'string';

    // Daftar kolom yang boleh diisi
    protected $fillable = ['id', 'user_id', 'interest', 'learning_mode'];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function enrollments()
    {
 
    return $this->belongsToMany(
        Course::class, 
        'enrollments', 
        'user_id',   // In your DB, this column actually holds Student IDs
        'course_id', 
        'id',        // The Student's 'id' (S202602)
        'id'         // The Course's 'id'
    )
    ->withPivot('status', 'progress_percent', 'enrolled_at', 'session_id', 'id')
    ->withTimestamps();
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