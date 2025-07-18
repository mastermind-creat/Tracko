<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ManagerDashboardController;
use App\Http\Controllers\MilestoneController;

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/public-portal', function () {
    // Placeholder for public portal view
    return view('public-portal');
})->name('public.portal');

Route::get('/dashboard', [App\Http\Controllers\ProjectController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin-panel', function () {
    return view('admin-panel');
})->middleware(['auth', 'role:admin'])->name('admin.panel');

Route::get('/manager-dashboard', [ManagerDashboardController::class, 'index'])->middleware(['auth', 'role:project_manager'])->name('manager.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

Route::resource('projects', ProjectController::class);
Route::resource('reports', ReportController::class);
Route::resource('milestones', MilestoneController::class)->only(['store','update','destroy'])->middleware('auth');

// Public About and Contact Us pages
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

require __DIR__.'/auth.php';
