<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_number',
        'customer_id',
        'sub_total',
        'tax',
        'vat',
        'discount',
        'grand_total',
        'status',
        'user_address',
        'delivery_date'
    ];

    public function details() {
        return $this->hasMany(OrderDetail::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'customer_id');
    }
}
