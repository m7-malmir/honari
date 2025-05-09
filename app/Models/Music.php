<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    protected $table = 'musics';
    protected $fillable = [
        'title_fa',
        'title_en',
        'description_fa',
        'description_en',
        'artist',
        'cover',
        'file',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

