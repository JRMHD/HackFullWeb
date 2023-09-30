<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Import the UserController class

// Display the form
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Handle form submission
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// routes/web.php
Route::post('/contact', 'ContactController@sendEmail')->name('contact.send');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/pricing', function () {
    return view('pricing');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/', function () {
    return view('welcome');
})->name('home');
