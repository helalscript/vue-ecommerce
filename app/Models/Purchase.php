<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function product(){
        return $this->hasMany(Product::class);
    }
    public function order_item(){
        return $this->hasMany(Order_item::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
