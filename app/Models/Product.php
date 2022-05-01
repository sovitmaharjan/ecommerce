<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Product extends Model
{
    use HasFactory, HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'status',
        'category_id',
        'tags',
        'video_url',
        'price',
        'discount_option',
        'discount',
        'vat',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'user_id',
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
