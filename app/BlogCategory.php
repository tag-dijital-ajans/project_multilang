<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    protected $table = 'blogcategory';
    protected $guarded = [];

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = [
        'title','slug'
    ];

    protected $fillable = [

    ];
}
