<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ajax extends Model
{
    use HasFactory;

    protected $table = 'ajax';
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'password',
    ];

    public $timestamps = false;
}
