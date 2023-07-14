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

Route::get('/menu-transfer', function () {
    return view('menu-transfer');
})->name('menu-transfer')->middleware('isLoggedIn');





// Sign up routes
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup'])->name('signup.post');

// Sign in routes
Route::get('/', [AuthController::class, 'showSigninForm'])->name('signin');
Route::get('/signin', [AuthController::class, 'showSigninForm'])->name('signin');
Route::post('/signin', [AuthController::class, 'signin'])->name('signin.post');
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard')->middleware('isLoggedIn');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


