<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'imageable_id',
        'imageable_type',
        'path',
        'name',
        'uploadable_id',
        'uploadable_type',
        'type',
        'status',
    ];

    public function getUrl()
    {
        return url('storage/' . $this->path);
    }
}
