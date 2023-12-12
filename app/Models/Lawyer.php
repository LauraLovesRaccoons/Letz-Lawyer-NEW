<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

use App\Models\User;
class Lawyer extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
