<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'mentor_id'];

    // The users inside this group
    public function users()
    {
        return $this->belongsToMany(User::class, 'group_user');
    }

    // The messages sent in this group
    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}