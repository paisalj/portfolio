<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'title',
        'bio',
        'profile_image',
        'email',
        'phone',
        'location',
        'github_url',
        'linkedin_url',
        'instagram_url',
        'cv_file',
    ];
}