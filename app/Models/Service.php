<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Service extends Model
{
    use \Astrotomic\Translatable\Translatable;
    public $translatedAttributes = ['description'];
    protected $fillable = ['id', 'name','status','category_id', 'image', 'android', 'ios', 'web'];
   
    public function toArray(){
        return [
            'id' =>$this->id,
            'name' =>$this->name,
            'image' =>$this->image,
            'description' =>$this->translateOrNew(\App::getLocale())->description,
            'android' =>$this->android,
            'ios' =>$this->ios,
            'web' =>$this->web,
            'category_id' =>$this->category_id,
            'category' => Category::whereId($this->category_id)->first()->translateOrNew(\App::getLocale())->name,
            'written_on'=> $this->written_on,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
    public function image(array $attributes)
    {
        if ($this->photo_path) {
            return URL::to(App::make(Server::class)->fromPath($this->photo_path, $attributes));
        }
    }
}
