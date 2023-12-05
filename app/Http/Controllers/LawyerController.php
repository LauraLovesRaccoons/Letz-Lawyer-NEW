<?php

namespace App\Http\Controllers;

use App\Models\Lawyer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LawyerController extends Controller
{
    // Show all lawyers
    public function index(){
        return view('lawyers.index',
        [
            'lawyers' => Lawyer::latest()
                    ->filter(request(['tag', 'search']))
                    ->paginate(4),
        ]);
    }

    //Show single Lawyer
    public function show($id){
        return view('lawyers.show', [
            'lawyer' => Lawyer::find($id)
        ]);
    }

    public function create(){
        return view('lawyers.create');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'title' => 'required',
            //'company' => ['required', Rule::unique('lawyers', 'company')],
            'company' => ['required'],
            'location' => 'required',
            'website' => ['required','url'],
            'logo' => [ 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        if($request->hasFile('logo'))
        {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        //Add the user_id to the form fields, 
        //Which ever user creates the Lawyer, that user_id will be added to the Lawyer
        $formFields['user_id']= auth()->user()->id;

        Lawyer::create($formFields);

        return redirect('/')->with('message', 'Lawyer listing created Successfully!');
    }

    public function edit($id)
    {
        $lawyer = Lawyer::find($id);
        //Make sure logged in user is owner of the Lawyer
        if($lawyer->user_id != auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        return view('lawyers.edit', [
            'lawyer' => $lawyer
        ]);
    }

    public function update(Request $request,$id)
    {
        //Fetch the lawyer to be updated
        $lawyer = Lawyer::find($id);

        //Make sure logged in user is owner of the lawyer
        if($lawyer->user_id != auth()->id()) {
            abort(403, 'Unauthorized action.');
        }        

        //Validate the form fields
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => ['required','url'],
            'logo' => [ 'image', 'mimes:png,jpg,jpeg', 'max:2048'],
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required',
        ]);

        //upload the new logo
        if($request->hasFile('logo'))
        {
            //Replace the old logo with the new one. Delete the old logo from the storage.
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        //Update the lawyer
        $lawyer->update($formFields);

        //Redirect to the lawyer detail page
        return redirect('lawyers/'. $lawyer->id)->with('message', 'Lawyer listing updated Successfully!');
    }

    public function destroy($id)
    {
        //Fetch the lawyer to be deleted
        $lawyer= Lawyer::find($id);

        //Make sure logged in user is owner of the lawyer
        if($lawyer->user_id != auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        //Delete the lawyer
        $lawyer->delete();

        //Redirect to the home page
        return redirect('/')->with('message', 'Lawyer listing deleted Successfully!');
    }

    public function manage()
    {
        return view('lawyers.manage',[
            'lawyers' => auth()->user()->lawyers
        ]);
    }
}
