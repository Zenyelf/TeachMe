<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'role',
        'avatar'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function enrolledCourses() {
        return $this->belongsToMany(Course::class, 'course_user');
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_user');
    }

    public function enrollments(): BelongsToMany
{
    return $this->belongsToMany(
        Course::class, 
        'enrollments', 
        'user_id',   // The column in your table holding 'S202602'
        'course_id', 
        'id',        // Student's ID
        'id'         // Course's ID
    )
    ->withPivot('status', 'progress_percent', 'enrolled_at')
    ->withTimestamps();
}

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function mentor() {
        return $this->hasOne(Mentor::class);
    }

    public function student() {
        return $this->hasOne(Student::class);
    }
}