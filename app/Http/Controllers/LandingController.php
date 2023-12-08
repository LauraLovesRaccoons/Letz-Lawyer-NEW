<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\Category;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function showLandingPage()
    {
        $specialties = Category::all(); // Fetch specialties from the database

        return view('UserLandingCatagory.landing', compact('specialties'));
    }

    public function submitSearch(Request $request)
    {
        // Validate the form inputs
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'specialty' => 'required',
            'location' => 'required|string|max:255',
        ]);

        // Retrieve validated form data
        $name = $validatedData['name'];
        $specialty = $validatedData['specialty'];
        $location = $validatedData['location'];

        // Perform any necessary logic or database operations based on the submitted data
        // For example:
        // Fetch lawyers based on the specialty and location
        $lawyers = Lawyer::where('specialty', $specialty)
                         ->where('location', $location)
                         ->get();

        // You can pass $lawyers data to a view and display it there
        return view('search_results', compact('lawyers'));
    }
}
