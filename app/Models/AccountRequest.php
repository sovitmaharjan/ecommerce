<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'shop_name',
        'status'
    ];
}
