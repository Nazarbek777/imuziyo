<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table='projects';

    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'content_uz',
        'content_ru',
        'content_en',
        'description_uz',
        'description_ru',
        'description_en',
        'project_type',
        'project_url',
        'image',
        'show_image'
    ];
}
