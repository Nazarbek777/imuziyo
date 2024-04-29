<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table = 'homes';
    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'content_uz',
        'content_ru',
        'content_en',
        'image'
    ];
}
