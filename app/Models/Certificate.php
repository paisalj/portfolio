<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'name',
        'issuer',
        'certificate_number',
        'issue_date',
        'credential_url',
        'image',
        'description',
    ];

    protected $casts = [
        'issue_date' => 'date',
    ];
}