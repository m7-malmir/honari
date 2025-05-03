<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'educations';
    protected $fillable = [
        'title_fa',
        'title_en',
        'description_fa',
        'description_en',
        'slug_fa',
        'slug_en',
        'cover',
        'video_url',
        'order',
    ];
}

