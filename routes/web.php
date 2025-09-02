<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Login page as default
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Home page (for after login)
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Signup page
Route::get('/signup', function () {
    return view('auth.signup');
})->name('signup');

// Your Details page
Route::get('/your-details', function () {
    return view('auth.your-details');
})->name('your-details');

// Address page
Route::get('/address', function () {
    return view('auth.address');
})->name('address');

// Verify email page (for forgot password)
Route::get('/verify-email', function () {
    return view('auth.verify-email');
})->name('verify-email');

// Verification page (for OTP input)
Route::get('/verification', function () {
    return view('auth.verification');
})->name('verification');

// Reset password page
Route::get('/reset-password', function () {
    return view('auth.reset-password');
})->name('reset-password');

// Confirmation page
Route::get('/confirmation', function () {
    return view('auth.confirmation');
})->name('confirmation');
