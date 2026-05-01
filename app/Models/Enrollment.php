<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = [
        'user_id',
        'course_id',
        'status',
        'progress_percent',
        'enrolled_at'
    ];

    // Relationship back to the course
    public function course() {
        return $this->belongsTo(Course::class);
    }
}
