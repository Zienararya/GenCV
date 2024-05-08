<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurriculumVitae extends Model
{
    use HasFactory;
    protected $fillable = [
        'job_title',
        'first_name',
        'last_name',
        'email',
        'phone',
        'country',
        'address',
        'date_birth',
        'place_birth',
        'skill',
        'language',
        'summary',
        'education',
    ];

    protected $casts = [
        'education' => 'json',
    ];
}
