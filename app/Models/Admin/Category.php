<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'order_level',
        'featured',
        'status',
        'level',
        'parent_id',
        'description',
        'meta_title',
        'meta_description',
    ];
}
