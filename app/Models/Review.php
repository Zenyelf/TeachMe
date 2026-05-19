<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Review extends Model
{
    use HasFactory;

    // Because your migration uses a custom string ID instead of auto-incrementing numbers
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id',
        'user_id',
        'mentor_id',
        'course_id',
        'rating',
        'comment'
    ];

    public function course() {
        return $this->belongsTo(Course::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}