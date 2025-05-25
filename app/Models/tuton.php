<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tuton extends Model
{
    protected $table = 'tuton';

    protected $fillable = [
        'username',
        'email',
        'password_hash',
        'full_name',
        'status',
        'last_login'
    ];

    // Relasi ke courses yang dibuat tutor ini
    public function courses()
    {
        return $this->hasMany(courses::class, 'created_by');
    }
    use HasFactory;
}
