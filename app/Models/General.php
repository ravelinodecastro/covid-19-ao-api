<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $fillable = ['id', 'confirmed', 'suspects', 'recovered', 'deaths'];
   

}
