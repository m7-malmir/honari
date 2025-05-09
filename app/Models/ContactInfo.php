<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'address_fa',
        'address_en',
        'phone',
        'mobile',
        'email',
        'website',
        'instagram',
        'twitter',
        'telegram',
        'whatsapp',
        'fax',
        'lat',
        'lng',
        'description_fa',
        'description_en',
    ];
}