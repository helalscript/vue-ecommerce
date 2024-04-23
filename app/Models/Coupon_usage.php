<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon_usage extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function cupon() {
        return $this->belongsTo(Cupon::class);
    }
}
