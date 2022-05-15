<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    const PLACED = 'placed';
    const PROCESSING = 'processing';
    const SHIPPED = 'shipped';
    const DELIVERED = 'delivered';
    const CANCELLED = 'cancelled';

    use HasFactory;

    protected $fillable = [
        'order_number',
        'user_id',
        'sub_total',
        'tax',
        'vat',
        'discount',
        'grand_total',
        'status',
        'user_address',
    ];

    public function details() {
        return $this->hasMany(OrderDetail::class);
    }

    public function user(){
        return $this->belongsTo(User::class, 'customer_id');
    }
}
