<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'sub_category_id',
        'sub_sub_category_id',
        'video_url',
        'description',
        'seo_title',
        'seo_description',
        'base_price',
        'status',
        'vendor_id'
    ];
}
