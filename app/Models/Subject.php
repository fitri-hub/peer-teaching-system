<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'nama_mapel'
    ];

    public function tutors()
    {
        return $this->hasMany(Tutor::class);
    }
}