<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // If your ID is a string/UUID, tell Laravel not to auto-increment it
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id', 
        'mentor_id', 
        'category_id', 
        'title', 
        'description', 
        'price',
        'type',
        'language',
        'slots',
        'lessons'
    ];

    public function sessions() {
        return $this->hasMany(CourseSession::class);
    }

    // Relationship to the Mentor
    public function mentor() {
        return $this->belongsTo(Mentor::class);
    }

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function students() {
        return $this->belongsToMany(User::class, 'course_user');
    }

    public function enrollments(){
        return $this->hasMany(Enrollment::class);
    }
}