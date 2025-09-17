<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\FilterController;

// Login page as default
Route::get('/', function () {
    return view('auth.login');
})->name('login');

// Home page (main layout - default page)
Route::get('/home', function () {
    return view('main.home');
})->name('home');

Route::get('/videos', function () {
    return view('main.videos');
})->name('videos');

Route::get('/saved', function () {
    return view('main.saved');
})->name('saved');

Route::get('/stories', function () {
    return view('main.all-stories');
})->name('stories');

Route::get('/story/{id}', function ($id) {
    return view('main.story-detail', compact('id'));
})->name('story.detail');

// Additional main layout pages
Route::get('/dogs', function () {
    return view('main.dogs');
})->name('dogs');

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

// Language switching routes
Route::get('/language/{locale}', [LanguageController::class, 'switchLanguage'])->name('language.switch');

// Filter routes
Route::get('/filters/countries', [FilterController::class, 'getCountries'])->name('filters.countries');
Route::get('/filters/breeds', [FilterController::class, 'getBreeds'])->name('filters.breeds');
Route::get('/filters/bloodlines', [FilterController::class, 'getBloodlines'])->name('filters.bloodlines');
