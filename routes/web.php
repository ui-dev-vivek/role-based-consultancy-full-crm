<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\Main\Sales;

use App\Livewire\Admin\Users\{Create as UserCreate, Edit as UserEdit, Index as UserIndex};
use App\Livewire\Admin\Partners\{Create as PartnerCreate, Edit as PartnerEdit, Index as PartnerIndex};
use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\ResetPassword;
use App\Models\Language;
use App\Http\Controllers\Main\Home;
use App\Http\Controllers\Main\Admissions;

// Public
Route::get('/', [Home::class, 'home'])->name('home');
Route::get('admissions', [Admissions::class, 'index'])->name('admissions');
Route::post('/api/admission/submit', [Admissions::class, 'submitInquiry']);
Route::get('training-and-placements', [Home::class, 'trainings'])->name('trainings');
Route::get('training-placement/free-courses', [Home::class, 'freeCourses'])->name('free-courses');
Route::get('intellectual-property', [Home::class, 'intellectualProperty'])->name('ip');
Route::get('research', [Home::class, 'research'])->name('research');
Route::view('about-us', 'main.about');
Route::view('contact-us', 'main.contact');

// Sales
Route::prefix('sales')->group(function () {
    Route::get('/', [Sales::class, 'index'])->name('sales.index');
});



// Auth Routes - Livewire
Route::get('/login', Login::class)->name('login');
// Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout'); // Keep logout as is for now

// Password Reset Routes - Livewire
Route::get('/forgot-password', ForgotPassword::class)->name('password.request');
// Route::post('/forgot-password', [LoginController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', ResetPassword::class)->name('password.reset');
// Route::post('/reset-password', [LoginController::class, 'resetPassword'])->name('password.update');





// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/planner', function () {
    return view('dashboard.planner');
})->middleware('auth');

Route::prefix('dashboard')->group(function () {});



// // Admin routes - only accessible by core users
// Route::middleware(['auth', CheckRole::class . ':core'])->prefix('dashboard')->name('admin.')->group(function () {
//     // Route::resource('users', UserController::class);
//     Route::get('users', UserIndex::class)->name('users.index');
//     Route::get('users/create', UserCreate::class)->name('users.create');
//     Route::get('users/{user}/edit', UserEdit::class)->name('users.edit');
//     Route::resource('roles', RoleController::class);
//     Route::resource('permissions', PermissionController::class);

//     Route::resource('language-locations', LanguageLocation::class);

//     // Route::resource('partners', PartnerController::class); // Moved to shared group
// });
// Route::middleware(['auth', CheckRole::class . ':core,sales'])
//     ->prefix('dashboard')
//     ->name('admin.')
//     ->group(function () {
//         // Partners
//         Route::prefix('partners')->name('partners.')->group(function () {
//             Route::get('/', PartnerIndex::class)->name('index');
//             Route::get('/create', PartnerCreate::class)->name('create');
//             Route::get('/{partner}/edit', PartnerEdit::class)->name('edit');
//         });
//     });
