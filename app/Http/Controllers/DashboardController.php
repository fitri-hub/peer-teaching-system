<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Tutor;
use App\Models\Subject;
use App\Models\Booking;

class DashboardController extends Controller
{
    // Redirect ke dashboard sesuai role
    public function index()
    {
        $role = auth()->user()->role;

        if ($role === 'admin') {
            return redirect()->route('dashboard.admin');
        } elseif ($role === 'tutor') {
            return redirect()->route('dashboard.tutor');
        } else {
            return redirect()->route('dashboard.student');
        }
    }

    public function admin()
    {
        return view('dashboards.admin', [
            'totalUsers'      => User::count(),
            'totalTutors'     => Tutor::count(),
            'totalSubjects'   => Subject::count(),
            'totalBookings'   => Booking::count(),
            'pendingBookings' => Booking::where('status', 'pending')->count(),
            'approvedBookings'=> Booking::where('status', 'approved')->count(),
            'rejectedBookings'=> Booking::where('status', 'rejected')->count(),
        ]);
    }

    public function tutor()
    {
        $tutor = auth()->user()->tutor;
        $bookings = $tutor
            ? Booking::where('tutor_id', $tutor->id)->with(['student', 'tutor.subject'])->latest()->get()
            : collect();

        return view('dashboards.tutor', compact('bookings'));
    }

    public function student()
    {
        $bookings = Booking::where('student_id', auth()->id())
            ->with(['tutor.subject'])
            ->latest()
            ->get();

        return view('dashboards.student', compact('bookings'));
    }
}