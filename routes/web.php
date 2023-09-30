<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController; // Import the UserController class


use App\Mail\MyTestEmail;
use Illuminate\Support\Facades\Mail;

Route::get('/testroute', function () {
    $name = "Funny Coder";
    // $data="";

    // The email sending is done using the to method on the Mail facade
    Mail::to('testreceiver@gmail.com')->send(new MyTestEmail($name));
});

// Display the form
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Handle form submission
Route::post('/user/store', [UserController::class, 'store'])->name('user.store');

// routes/web.php
Route::post('/contact', 'ContactController@sendEmail')->name('contact.send');
Route::post('/contact1', [ContactController::class, 'sendEmail'])->name('contact.send1');

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
