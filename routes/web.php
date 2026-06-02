<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

// ── DASHBOARD (role-based redirect) ──
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// ── ADMIN ──
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'admin'])->name('dashboard.admin');
    Route::resource('subjects', SubjectController::class);
    Route::resource('tutors', TutorController::class);
});

// ── TUTOR ──
Route::middleware(['auth', 'role:tutor'])->group(function () {
    Route::get('/tutor/dashboard', [DashboardController::class, 'tutor'])->name('dashboard.tutor');
    Route::get('/tutor/bookings', [BookingController::class, 'tutorBookings'])->name('bookings.tutor');
    Route::patch('/bookings/{booking}/approve', [BookingController::class, 'approve'])->name('bookings.approve');
    Route::patch('/bookings/{booking}/reject', [BookingController::class, 'reject'])->name('bookings.reject');
    Route::get('/materials/create', [MaterialController::class, 'create'])->name('materials.create');
    Route::post('/materials', [MaterialController::class, 'store'])->name('materials.store');
});

// ── STUDENT ──
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/student/dashboard', [DashboardController::class, 'student'])->name('dashboard.student');
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/my-bookings', [BookingController::class, 'myBookings'])->name('bookings.my');
    Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
    Route::get('/materials/{material}/download', [MaterialController::class, 'download'])->name('materials.download');
    Route::get('/ratings/create', [RatingController::class, 'create'])->name('ratings.create');
    Route::post('/ratings', [RatingController::class, 'store'])->name('ratings.store');
});

// ── RATINGS (semua role bisa lihat) ──
Route::middleware(['auth'])->group(function () {
    Route::get('/ratings', [RatingController::class, 'index'])->name('ratings.index');
});

// ── PROFILE ──
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';