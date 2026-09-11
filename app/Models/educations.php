<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class educations extends Model
{
    protected $fillable = [
        'institution',
        'degree',
        'field_of_study',
        'description',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}