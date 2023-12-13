<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{

    public function showDashboard(Request $request)
    {
        // Check if a search query is present
        if ($request->has('name')) {
            $search = $request->get('name');
            $results = User::where('name', 'like', '%' . $search . '%')->where('is_lawyer', '=', 1)->paginate(5);

            return view('common.common_dashboard', ['results' => $results]);
        }

        // No search query, display all lawyer posts
        $allLawyerPosts = Post::all();
        return view('common.common_dashboard', compact('allLawyerPosts'));
    }

    public function search(Request $request)
    {
        // do the seach query 
        // SELECT * FROM users WHERE name = 'Laura' AND is_lawyer = 1;
        if ($request->has('name')) {
            $search = $request->get('name');
            $results = User::where('name', 'like', '%' . $search . '%')->where('is_lawyer', '=', 1)->paginate(5);

            return view('common.common_dashboard', ['results' => $results]);
        }

    }


    public function clientDashboard()
{
    // Logic for client dashboard
    return view('client.client_dashboard');
}

// search function
// public function search(Request $request)
// {
//     $search = $request->get('name');
//     $results = User::where('name', 'like', '%' . $search . '%')->where('is_lawyer', '=', 1)->paginate(5);
//     return view('common.common_dashboard', ['results' => $results]);
// }

public function lawyerDashboard()
{
    // Logic for lawyer dashboard
    return view('lawyers.lawyer_dashboard');
}

}
