<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blogs';

    protected $casts = [
        'image'  => 'array',
        'title'  => 'array',
        'link'   => 'array',
        'status' => 'array',
    ];

    protected $fillable = ['category', 'image', 'title', 'link', 'status', 'created_at', 'updated_at'];
}
