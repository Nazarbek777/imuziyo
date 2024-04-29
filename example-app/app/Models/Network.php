<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Network extends Model
{
    use HasFactory;
    protected $table = 'networks';
    protected $fillable = [
        'name_uz',
        'name_ru',
        'name_en',
        'telegram',
        'instagram',
        'facebook'
    ];
}
