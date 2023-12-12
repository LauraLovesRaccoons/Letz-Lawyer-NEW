<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Google\Service\ServiceControl\Auth;
use App\Models\Post;
use App\Models\User;

class LawyerController extends Controller
{
    // public function index()
    // {
    //     return view('lawyers.index', [
    //         'lawyers' => Lawyer::latest()
    //             ->filter(request(['tag', 'search']))
    //             ->paginate(4),
    //     ]);
    // }

    public function show(User $lawyer)
    {
        return view('lawyers.show', compact('lawyer'));
    }

    public function viewPage()
    {
        return view('lawyers.create_lawyer_data');
    }

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

    public function edit(User $lawyer)
    {
        
        $this->authorize('update', $lawyer);

        return view('lawyers.edit', compact('lawyer'));
    }

    public function update(Request $request, User $lawyer)
    {
        
        $this->authorize('update', $lawyer);

        
    }

    public function destroy(User $lawyer)
    {
        
        $this->authorize('delete', $lawyer);

       
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

        $query = User::query();

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

    public function showLawyerDashboard()
    {
       
        $allLawyerPosts = Post::all();  

        
        return view('lawyers.lawyer_dashboard', compact('allLawyerPosts'));
    }

   // public function index(){
        //return view('lawyers.lawyer_dashboard',
       // [
           // 'lawyerPosts' => User::latest()
                    //->filter(request(['description', 'category']))
                   // ->paginate(4),
       // ]);

    }



