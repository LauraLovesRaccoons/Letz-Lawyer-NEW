<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LawyerController extends Controller
{
    public function index()
    {
        return view('lawyers.index', [
            'lawyers' => Lawyer::latest()
                ->filter(request(['tag', 'search']))
                ->paginate(4),
        ]);
    }

    public function show(Lawyer $lawyer)
    {
        return view('lawyers.show', compact('lawyer'));
    }

    public function viewPage()
    {
        return view('lawyers.create_lawyer_data');
    }

    //public function create()
    //{
   //    return view('register2');
   // }
   // public function register2()
   // {
  //      return view('register2');
   // }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            
            'company' => ['required'],
            'location' => 'required',
            'website' => ['required','url'],
            'logo' => [ 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

    }

    public function edit(Lawyer $lawyer)
    {
        // Make sure logged in user is owner of the Lawyer
        $this->authorize('update', $lawyer);

        return view('lawyers.edit', compact('lawyer'));
    }

    public function update(Request $request, Lawyer $lawyer)
    {
        // Make sure logged in user is owner of the Lawyer
        $this->authorize('update', $lawyer);

        // Validation and updating logic
    }

    public function destroy(Lawyer $lawyer)
    {
        // Make sure logged in user is owner of the Lawyer
        $this->authorize('delete', $lawyer);

        // Deletion logic
    }

    public function manage()
    {
        return view('lawyers.manage', [
            'lawyers' => auth()->user()->lawyers
        ]);
    }
    public function search(Request $request)
    {
        $categories = Category::all();
        $selectedCategory = $request->input('category');
        $searchName = $request->input('name');

        $query = Lawyer::query();

        if ($selectedCategory) {
            $query->whereHas('categories', function ($query) use ($selectedCategory) {
                $query->where('id', $selectedCategory);
            });
        }

        if ($searchName) {
            $query->where('name', 'like', "%$searchName%");
        }

        $lawyers = $query->get();

        return view('lawyers.search', compact('lawyers', 'categories', 'selectedCategory', 'searchName'));
    }


    //// // test route
    //// public function testcreatelawyer()
    //// {
    ////     return view('lawyers.create_lawyer_data');
    //// }
}
