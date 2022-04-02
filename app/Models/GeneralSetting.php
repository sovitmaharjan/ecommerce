<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneralSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'website_name',
        'email',
        'address',
        'mobile',
        'phone',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'youtube',
        'google_map',
    ];

    public function image()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function getUrlType($type){
        return $this->image()->where('type', $type)->first() !== null ? url('storage/' . $this->image()->where('type', $type)->first()->path) : null;
    }

    public function getPath($type){
        return $this->image()->where('type', $type)->first()->path ?? 'null';
    }
}
