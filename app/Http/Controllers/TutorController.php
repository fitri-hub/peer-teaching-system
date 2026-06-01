<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;
use App\Models\Subject;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $tutors = Tutor::with('subject')->get();

        return view('tutors.index', compact('tutors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $subjects = Subject::all();

        return view('tutors.create', compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
    {
        Tutor::create([
            'nama' => $request->nama,
            'subject_id' => $request->subject_id,
            'bio' => $request->bio,
        ]);

        return redirect()->route('tutors.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tutor $tutor)
    {
          $subjects = Subject::all();

        return view('tutors.edit', compact('tutor', 'subjects'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tutor $tutor)
    {
        $subjects = Subject::all();

        return view('tutors.edit', compact('tutor', 'subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tutor $tutor)
    {
         $tutor->update([
        'nama' => $request->nama,
        'subject_id' => $request->subject_id,
        'bio' => $request->bio,
    ]);

        return redirect()->route('tutors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tutor $tutor)
    {
         $tutor->delete();

        return redirect()->route('tutors.index');
    }
}
