<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function sub_category(){
        return $this->belongsTo(Sub_category::class);
    }
    public function wishlist(){
        return $this->hasMany(Wishlist::class);
    }
    public function order_item(){
        return $this->belongsTo(Order_item::class);
    }
    public function purchase(){
        return $this->belongsTo(Purchase::class);
    }
    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
