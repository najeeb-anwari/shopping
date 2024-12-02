<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'old_price', 'price','description','total_stock','category_id','seller_id'];

    public function images(){
        return $this->hasMany(Image::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function seller() {
        return $this->belongsTo(User::class, 'foreign_key', 'seller_id');
    }
    public function reviews(){
        return $this->hasMany(Review::class);
    }
    public function specification(){
        return $this->hasOne(Specification::class);
    }

    
}
