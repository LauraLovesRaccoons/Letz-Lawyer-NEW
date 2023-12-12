<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts'; 
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'category_id',
        'company',
        'description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function lawyer()
    {
        return 
        
        $this->belongsTo(Lawyer::class);
    }

    public function showLawyerDashboard()
{
    
    $allLawyerPosts = Post::all(); 

  
    return view('lawyers.lawyer_dashboard', compact('allLawyerPosts'));
}
}


