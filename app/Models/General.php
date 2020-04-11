<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable = ['id', 'active','confirmed', 'suspects', 'recovered', 'deaths'];
   

}
