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
         'crm_name',
         'crm_number',
         'crm_location'
     ];
}
