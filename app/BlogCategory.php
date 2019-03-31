<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blogcategory';
    protected $guarded = [];

    public function posts() {

        return $this->hasMany('App\Blog', 'category');
    }
    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = [
        'title','slug'
    ];

    protected $fillable = [

    ];


}
