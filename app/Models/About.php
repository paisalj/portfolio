<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'description',
        'location',
        'focus',
        'framework',
        'database',
        'values',
    ];
}