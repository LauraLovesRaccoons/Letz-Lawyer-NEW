<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'start_datetime',
        'end_datetime',
        'google_calendar_event_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


