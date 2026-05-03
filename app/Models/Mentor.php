<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model // 1. Change this to extend Model
{
    // If your IDs are strings like 'M202601', tell Laravel so it doesn't break!
    public $incrementing = false;
    protected $keyType = 'string';

    // 2. Define the relationship we asked for in the Controller
    public function user()
    {
        // "This mentor profile belongs to a User account"
        return $this->belongsTo(User::class);
    }

    // --- Keep your custom methods below --- //

    public function CreateCourse($title, $description, $price){
        #something
    }

    public function UpdateCourse($course_id){
        #something
    }

    public function DeleteCourse($course_id){
        #something
    }

    public function SetAvailability($date, $time){
        #something
    }

    public function enrollments()
    {
        return $this->hasManyThrough(Enrollment::class, Course::class); 
    }

    public function courses()
    {
        // Make sure the foreign key in the courses table is 'mentor_id'
        return $this->hasMany(Course::class, 'mentor_id', 'id');
    }

    public function Message($student_id){
        #something
    }
}