<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserLogin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SignupController;



Route::get('/', function () {
    return view('homepage');
});

Route::get('user-login',[UserLogin::class,'index'])->name('user-login');

Route::get('admin-login',[AdminController::class,'index'])->name('admin-login');

Route::get('signup',[SignupController::class,'index'])->name('signup');
 
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');




    // Route to redirect user to Google OAuth page
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle']);

// Route to handle Google OAuth callback
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);


require __DIR__.'/auth.php';
