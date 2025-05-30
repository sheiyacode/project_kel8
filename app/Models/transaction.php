<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Mass assignable fields
    protected $fillable = [
        'user_id',
        'package_name',         // jangan lupa ini, sesuai migration tadi
        'amount',
        'method',               // kalau ada metode pembayaran (boleh nullable)
        'status',
        'midtrans_transaction_id', // ID transaksi Midtrans (optional)
        'payment_url',          // URL atau token pembayaran (optional)
    ];

    // Relasi ke user (opsional)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
