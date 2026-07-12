<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Main\Home;
use App\Http\Controllers\Main\Admissions;

// Public
Route::get('/', [Home::class, 'home'])->name('home');
Route::get('explore', [Home::class, 'explore'])->name('explore');
Route::get('admissions', [Admissions::class, 'index'])->name('admissions');
Route::post('/api/admission/submit', [Admissions::class, 'submitInquiry']);
Route::get('training-and-placements', [Home::class, 'trainings'])->name('trainings');
Route::get('training-placement/free-courses', [Home::class, 'freeCourses'])->name('free-courses');
Route::get('intellectual-property', [Home::class, 'intellectualProperty'])->name('ip');
Route::get('research', [Home::class, 'research'])->name('research');
Route::view('about-us', 'main.about');
Route::view('contact-us', 'main.contact');
Route::view('privacy-policy', 'main.privacy_policy');
Route::view('terms-of-service', 'main.terms_of_service');
