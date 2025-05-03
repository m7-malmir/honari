<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    use HasFactory;
    protected $table = 'musics'; // اگر نام جدول سفارشی است
    protected $fillable = [
        'title_fa',
        'title_en',
        'artist',
        'file', // مسیر فایل آپلود شده
    ];
}
