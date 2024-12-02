<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = ['total'];

    public function shipping() {
        return $this->hasOne(Shipping::class);
    }

    public function billing() {
        return $this->hasOne(Billing::class);
    }

    public function customer() {
        return $this->belongsTo(User::class, 'buyer_id');
    }
    
    public function payment() {
        return $this->hasOne(Payment::class, 'order_id');
    }

    public function items() {
        return $this->hasMany(OrderItem::class);
    }
}
