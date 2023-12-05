<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $categories = Category::all();
        $selectedCategory = $request->input('category');

        if ($selectedCategory) {
            $lawyers = Category::findOrFail($selectedCategory)->lawyers;
        } else {
            $lawyers = Lawyer::all();
        }

        return view('search', compact('lawyers', 'categories', 'selectedCategory'));
    }
//function to ensure that user has registered to select category
    public function __construct()
    {
         $this->middleware('auth'); // Ensure user is logged in
    }
}
