<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    protected $fillable = [
        'user_id',
        'amount',
        'method',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
