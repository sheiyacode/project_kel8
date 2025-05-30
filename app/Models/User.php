<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = [
        
        'full_name',
        'email',
        'password',
        'gender',
        
        'tanggal_lahir',
        'nomor_telepon',
        'last_login'
    ];
    protected $hidden = [
        'password',
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
