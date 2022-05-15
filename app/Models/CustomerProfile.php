<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'mobile',
        'dob',
        'gender',
        'status'
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
