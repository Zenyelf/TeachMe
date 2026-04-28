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
        'price'
    ];

    // Relationship to the Mentor
    public function mentor() {
        return $this->belongsTo(Mentor::class);
    }
}