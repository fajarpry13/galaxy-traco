<?php

namespace App\Models;

use App\ArticleStatus;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $casts = [
        'status' => ArticleStatus::class,
    ];

    protected $fillable = [
        'title',
        'description',
        'image',
        'status',
    ];
}
