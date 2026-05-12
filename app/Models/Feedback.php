<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Feedback extends Model
{
    use HasFactory, HasUuids;

    // Nama tabel di database
    protected $table = 'feedbacks';

    // Kolom yang boleh diisi
    protected $fillable = [
        'user_id',
        'rating',
        'category',
        'comments',
        'attachment',
        'status'
    ];

    // Relasi ke User (Feedback ini milik siapa)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}