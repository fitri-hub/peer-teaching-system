<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Tutor;
use App\Models\Booking;
use App\Models\Subject;

class DashboardController extends Controller
{
    public function admin()
    {
        $totalUsers = User::count();
        $totalTutors = Tutor::count();
        $totalSubjects = Subject::count();
        $totalBookings = Booking::count();
        $pendingBookings = Booking::where('status', 'pending')->count();
        $approvedBookings = Booking::where('status', 'approved')->count();
        $rejectedBookings = Booking::where('status', 'rejected')->count();

        return view('dashboards.admin', compact(
            'totalUsers',
            'totalTutors',
            'totalSubjects',
            'totalBookings',
            'pendingBookings',
            'approvedBookings',
            'rejectedBookings'
        ));
    }

    public function tutor()
    {
        $bookings = Booking::with('student', 'tutor.subject')->get();

        return view('dashboards.tutor', compact('bookings'));
    }

    public function student()
    {
        $bookings = Booking::with('tutor.subject')
            ->where('student_id', auth()->id())
            ->get();

        return view('dashboards.student', compact('bookings'));
    }
}