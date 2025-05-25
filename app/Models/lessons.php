<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'content',
        'order_number',
    ];

    public function course()
    {
        return $this->belongsTo(courses::class);
    }

    public function quizzes()
    {
        return $this->hasMany(quizzes::class);
    }

    public function progress()
    {
        return $this->hasMany(userprogress::class);
    }
    use HasFactory;
}
