<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    // 1. Tell Laravel these columns are safe to fill when saving to the database
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'message',
    ];

    // 2. Setup the relationship: A message belongs to a Sender
    public function sender()
    {
        return $this->belongsTo(User::class, 'sender_id');
    }

    // 3. Setup the relationship: A message belongs to a Receiver
    public function receiver()
    {
        return $this->belongsTo(User::class, 'receiver_id');
    }
}