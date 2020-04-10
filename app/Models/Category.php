<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use \Astrotomic\Translatable\Translatable;
    public $translatedAttributes = ['name'];
    protected $fillable = ['id'];
   

}
