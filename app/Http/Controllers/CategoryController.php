<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        // Logic to fetch data related to the category and pass it to the view
        $relatedData = $category->posts; // Example relation - replace with your logic

        return view('category.show', compact('category', 'relatedData'));
    }

    // Other methods for store, update, delete if needed
}
