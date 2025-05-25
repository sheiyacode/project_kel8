<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quizzes extends Model
{
    protected $table = 'quizzes';

    protected $fillable = [
        'lesson_id',
        'question',
        'type',
        'options',
        'correct_answer',
    ];

    protected $casts = [
        'options' => 'array',  // otomatis decode/encode JSON
    ];

    public function lesson()
    {
        return $this->belongsTo(lessons::class);
    }

    public function progress()
    {
        return $this->hasMany(userprogress::class);
    }
    use HasFactory;
}
