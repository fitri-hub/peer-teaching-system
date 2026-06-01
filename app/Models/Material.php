<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'tutor_id',
        'judul',
        'deskripsi',
        'file',
    ];

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
    }
}