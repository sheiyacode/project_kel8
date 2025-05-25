<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    protected $fillable = [
        'title',
        'description',
        'created_by',
    ];

    // Pembuat course (tutor/admin)
    public function creator()
    {
        return $this->belongsTo(Tuton::class, 'created_by');
    }

    // lessonss dalam course ini
    public function lessonss()
    {
        return $this->hasMany(lessons::class);
    }

    // Progress user di course ini
    public function progress()
    {
        return $this->hasMany(UserProgress::class);
    }

    // Sertifikat yang dikeluarkan untuk course ini
    public function certificated()
    {
        return $this->hasMany(Certificated::class);
    }
    use HasFactory;
}
