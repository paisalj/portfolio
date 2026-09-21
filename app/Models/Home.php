<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'name',
        'title',
        'hero_description',
        'profile_image',
        'cv_file',
        'github_url',
        'linkedin_url',
        'instagram_url',
    ];
}