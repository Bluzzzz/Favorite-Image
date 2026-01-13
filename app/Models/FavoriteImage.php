<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FavoriteImage extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_path',
    ];
}

