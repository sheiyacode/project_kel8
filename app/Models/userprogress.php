<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userprogress extends Model
{
    protected $table = 'user_progress';

    protected $fillable = [
        'user_id',
        'course_id',
        'lesson_id',
        'quiz_id',
        'status',
        'score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }

    public function lesson()
    {
        return $this->belongsTo(Lessons::class);
    }

    public function quiz()
    {
        return $this->belongsTo(Quizzes::class);
    }
    use HasFactory;
}
