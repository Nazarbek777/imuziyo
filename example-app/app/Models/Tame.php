<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tame extends Model
{
    use HasFactory;

    protected $table = 'tames';
    protected $fillable = [
        'name',
        'position',
        'image',
        'twitter',
        'instagram',
        'facebook',
        'linkedin',
    ];
}
