<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tutor;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function create()
    {
        $tutors = Tutor::with('subject')->get();

        return view('bookings.create', compact('tutors'));
    }

    public function store(Request $request)
    {
        Booking::create([
            'student_id' => auth()->id(),
            'tutor_id' => $request->tutor_id,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'status' => 'pending',
        ]);

        return redirect()->route('bookings.my');
    }

    public function myBookings()
    {
        $bookings = Booking::with('tutor.subject')
            ->where('student_id', auth()->id())
            ->get();

        return view('bookings.my', compact('bookings'));
    }

    public function tutorBookings()
    {
        $bookings = Booking::with('student', 'tutor.subject')->get();

        return view('bookings.tutor', compact('bookings'));
    }

    public function approve(Booking $booking)
    {
        $booking->update([
            'status' => 'approved',
        ]);

        return redirect()->route('bookings.tutor');
    }

    public function reject(Booking $booking)
    {
        $booking->update([
            'status' => 'rejected',
        ]);

        return redirect()->route('bookings.tutor');
    }
}