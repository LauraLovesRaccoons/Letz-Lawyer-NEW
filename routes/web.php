<?php

use Illuminate\Support\Facades\Route;
use App\Models\Specialty; // Corrected use statement for the Specialty model

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    $specialties = Category::all(); // Fetch specialties from the database

    return view('UserLandingCatagory.landing', compact('specialties'));
});

Route::post('/search', 'LawyerController@search')->name('lawyer.search.submit');

Route::get('/category', function () {
    return view('category');
});
