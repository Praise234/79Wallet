<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

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



//transfer
Route::get('/menu-transfer', function () {
    return view('menu-transfer');
})->name('menu-transfer')->middleware('isLoggedIn');
 

//transfer
Route::get('/menu-notificatiions', function () {
    return view('menu-notifications');
})->name('menu-notifications')->middleware('isLoggedIn');
 

// not sure what this is but it  probably means transfer within 79 wallet
Route::get('/menu-friends-transfer', function () {
    return view('menu-friends-transfer');
})->name('menu-friends-transfer')->middleware('isLoggedIn');
 

//request for money
Route::get('/menu-request', function () {
    return view('menu-request');
})->name('menu-request')->middleware('isLoggedIn');
 

//airtiem
Route::get('/airtime', function () {
    return view('airtime');
})->name('airtime')->middleware('isLoggedIn');
 



// Sign up routes
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');

// Sign in routes
Route::get('/', [AuthController::class, 'showSigninForm'])->name('signin');
Route::get('/signin', [AuthController::class, 'showSigninForm'])->name('signin');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin.post');
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard')->middleware('isLoggedIn');


// other pages
 
Route::get('/profile', [DashboardController::class, 'showProfile'])->name('profile')->middleware('isLoggedIn');
Route::get('/all-transactions', [DashboardController::class, 'showAllTransactions'])->name('all-transactions')->middleware('isLoggedIn');
Route::get('/cards', [DashboardController::class, 'showAllCards'])->name('cards')->middleware('isLoggedIn');
 
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


