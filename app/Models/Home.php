<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'video_background',
        'image_background',
    ];

    protected $casts = [
        'video_background' => 'array',
        'image_background' => 'array',
    ];
}
