<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Laravel looks for 'categories' table by default, 
    // but it doesn't hurt to be explicit.
    protected $table = 'categories';

    // Since your screenshot shows standard auto-increment IDs
    public $incrementing = true;

    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * One Category can have many Courses
     */
    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id');
    }
}