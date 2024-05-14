<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;
    protected $table = 'shows';
    protected $fillable = [
        'title',
        'content_uz',
        'content_ru',
        'content_en',
        'description_uz',
        'description_ru',
        'description_en',
        'show_image'
    ];
}
