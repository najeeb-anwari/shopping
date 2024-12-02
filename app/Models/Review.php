<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    
    public function user(Type $var = null)
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }
}
