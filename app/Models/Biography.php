<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    protected $fillable = [
        'full_name_fa', 'full_name_en', 'slug_fa', 'slug_en',
        'birth_date', 'profile_image', 'bio_fa', 'bio_en',
        'website', 'instagram', 'twitter', 'telegram'
    ];
}
