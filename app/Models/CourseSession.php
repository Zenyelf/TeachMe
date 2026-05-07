<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseSession extends Model
{
    // CourseSession.php
    protected $table = 'course_sessions';
    protected $fillable = ['course_id', 'batch_number', 'start_date', 'end_date', 'slots', 'meeting_link', 'location'];
}
