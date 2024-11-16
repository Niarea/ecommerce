<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model
{
    use HasFactory;

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
