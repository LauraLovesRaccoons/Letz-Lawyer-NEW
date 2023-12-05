<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Lawyer extends Model {

    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
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
                $query->where('title', 'like', '%' . $keyword . '%')
                ->orWhere('description', 'like', '%' . $keyword . '%')
                ->orWhere('company', 'like', '%' . $keyword . '%')
                ->orWhere('tags', 'like', '%' . $keyword . '%');
            }
        }
        if($filters['min'] ?? false && $filters['max'] ?? false)
        {
            $query->whereBetween('price', [$filters['min'], $filters['max']]);
        }
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}