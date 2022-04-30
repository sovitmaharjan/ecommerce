<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'shop_name',
        'mobile',
        'phone',
        'address',
        'pan_vat',
        'bank_name',
        'bank_branch',
        'account_number',
        'status'
    ];

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
