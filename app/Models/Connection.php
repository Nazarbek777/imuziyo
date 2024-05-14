<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Connection extends Model
{
    use HasFactory;

    protected $table = 'connections';
     protected  $fillable = [
         'crm_name_uz',
         'crm_name_ru',
         'crm_name_en',
         'crm_number',
         'crm_location_uz',
         'crm_location_ru',
         'crm_location_en',
     ];
}
