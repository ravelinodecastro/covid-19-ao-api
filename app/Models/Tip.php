<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Tip extends Model
{
    use \Astrotomic\Translatable\Translatable;
    public $translatedAttributes = ['title', 'body'];
    protected $fillable = ['id', 'image'];
   

}
