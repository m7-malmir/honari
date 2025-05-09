<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_fa', 'title_en', 'thumbnail', 'video_url',
        'description_fa', 'description_en', 'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

