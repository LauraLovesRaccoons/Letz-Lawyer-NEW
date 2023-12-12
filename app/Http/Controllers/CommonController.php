<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class CommonController extends Controller
{

    public function showDashboard(){
        $allLawyerPosts = Post::all();  

        return view('common.common_dashboard', compact('allLawyerPosts'));
    }
    public function clientDashboard()
{
    // Logic for client dashboard
    return view('client.client_dashboard');
}

public function lawyerDashboard()
{
    // Logic for lawyer dashboard
    return view('lawyers.lawyer_dashboard');
}

}
