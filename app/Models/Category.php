<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name_fa', 'name_en'];
    
    public function musics()
    {
        return $this->hasMany(Music::class);
    }
}
