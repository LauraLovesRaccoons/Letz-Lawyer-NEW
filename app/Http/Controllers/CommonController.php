<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommonController extends Controller
{

    public function showDashboard(){
        return view('common.common_dashboard');
    }
    public function clientDashboard()
{
    // Logic for client dashboard
    return view('cient.client_dashboard');
}

public function lawyerDashboard()
{
    // Logic for lawyer dashboard
    return view('lawyers.lawyer_dashboard');
}

}
