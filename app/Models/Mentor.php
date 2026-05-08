<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mentor extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $keyType = 'string';

    // Kolom Alex Johnson yang baru ditambahkan ke migrasi
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'academic_degree',
        'bio',
        'preferred_learning',
        'contact_email',
        'address',
        'linkedin_url',
        'portfolio_url',
        'twitter_handle',
    ];

    // Konversi otomatis JSON/  
    protected $casts = [
        'skills' => 'array',
        'is_online' => 'boolean',
        'is_offline' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // --- Method Custom Kamu ---

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
        return $this->hasMany(Course::class, 'mentor_id', 'id');
    }

    public function Message($student_id){
        #something
    }
}