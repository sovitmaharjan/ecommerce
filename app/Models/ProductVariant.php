<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'sku',
        'sku_price',
        'quantity',
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function attribute() {
        return $this->belongsTo(Attribute::class);
    }

    public function details() {
        return $this->hasMany(ProductVariantDetail::class);
    }
}
