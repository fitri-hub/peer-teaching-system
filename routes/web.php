<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TutorController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::resource('subjects', SubjectController::class);

    Route::resource('tutors', TutorController::class);

});

Route::middleware(['auth', 'role:tutor'])->group(function () {

    Route::get('/tutor', function () {
        return 'Halaman Tutor';
    });

});

Route::middleware(['auth', 'role:student'])->group(function () {

    Route::get('/student', function () {
        return 'Halaman Student';
    });

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::resource('subjects', SubjectController::class);

});

Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::get('/my-bookings', [BookingController::class, 'myBookings'])->name('bookings.my');
});

Route::middleware(['auth', 'role:tutor'])->group(function () {
    Route::get('/tutor/bookings', [BookingController::class, 'tutorBookings'])->name('bookings.tutor');
    Route::patch('/bookings/{booking}/approve', [BookingController::class, 'approve'])->name('bookings.approve');
    Route::patch('/bookings/{booking}/reject', [BookingController::class, 'reject'])->name('bookings.reject');
});

require __DIR__.'/auth.php';