<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function order_item(){
        return $this->hasMany(Order_item::class);
    }
    public function payment(){
        return $this->belongsTo(Payment::class);
    }
    public function shipment(){
        return $this->hasMany(Shipment::class);
    }
}
