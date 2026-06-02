<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Tutor;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $materials = Material::with('tutor.subject')->get();

        return view('materials.index', compact('materials'));
    }

    public function create()
    {
        $tutors = Tutor::with('subject')->get();

        return view('materials.create', compact('tutors'));
    }

    public function store(Request $request)
    {
        $filePath = $request->file('file')->store('materials', 'public');

        Material::create([
            'tutor_id' => $request->tutor_id,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'file' => $filePath,
        ]);

        return redirect()->route('materials.create')->with('success', 'Materi berhasil diupload.');
    }

    public function download(Material $material)
    {
        return response()->download(storage_path('app/public/' . $material->file));
    }
}