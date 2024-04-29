<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tame extends Model
{
    use HasFactory;

    protected $table = 'tames';
    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'position_uz',
        'position_ru',
        'position_en',
        'image',
        'twitter',
        'instagram',
        'facebook',
        'linkedin',
    ];
}
