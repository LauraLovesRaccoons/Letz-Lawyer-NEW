<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\Container\BindingResolutionException;

class LandingController extends Controller
{
    public function showLandingPage()
    {
        $specialties = Category::all(); // Fetch specialties from the database

        return view('UserLandingCatagory.landing', compact('specialties'));
    }

    public function submitSearch(Request $request)
    {
        // Handle form submission here
        // Process $request data and perform necessary actions

        // For example, you can retrieve form data like this:
        $name = $request->input('name');
        $specialties = $request->input('specialty');
        $location = $request->input('location');

        // Perform any necessary logic or database operations based on the submitted data

        // Redirect to a different page or return a response
    }
}
