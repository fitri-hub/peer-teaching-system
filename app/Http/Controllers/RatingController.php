<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use App\Models\Tutor;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        $tutors = Tutor::with('ratings', 'subject')->get();

        return view('ratings.index', compact('tutors'));
    }

    public function create()
    {
        $tutors = Tutor::with('subject')->get();

        return view('ratings.create', compact('tutors'));
    }

    public function store(Request $request)
    {
        Rating::create([
            'student_id' => auth()->id(),
            'tutor_id' => $request->tutor_id,
            'rating' => $request->rating,
            'komentar' => $request->komentar,
        ]);

        return redirect()->route('ratings.index');
    }
}