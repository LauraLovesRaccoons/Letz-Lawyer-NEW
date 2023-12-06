<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'logo',
        'company',
        'location',
        'email',
        'description',
        'tags',
        'website'
    ];

    public function scopeFilter($query, array $filters)
    {
        if($filters['tag'] ?? false)
        {
            $query->where('tags', 'like', '%'. $filters['tag'] . '%');
        }

        if($filters['search'] ?? false)
        {
            $keywords = explode(' ', $filters['search']);


            foreach($keywords as $keyword)
            {
                $query->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('description', 'like', '%' . $keyword . '%')
                ->orWhere('company', 'like', '%' . $keyword . '%')
                ->orWhere('tags', 'like', '%' . $keyword . '%');
            }
        }
        
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
