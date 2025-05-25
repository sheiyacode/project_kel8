<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{
    protected $fillable = [
        'username',
        'email',
        'password_hash',
        'full_name',
        'status',
        'last_login'
    ];

    public $timestamps = false;

    // Relasi ke transaksi
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

    // Relasi ke sertifikat
    public function certificated()
    {
        return $this->hasMany(Certificated::class);
    }

    // Relasi ke progress
    public function progress()
    {
        return $this->hasMany(UserProgress::class);
    }
}
