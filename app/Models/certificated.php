<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificated extends Model
{
    protected $fillable = [
        'user_id',
        'course_id',
        'certificate_url',
        'issued_at',
    ];

    protected $dates = [
        'issued_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
    use HasFactory;
}
