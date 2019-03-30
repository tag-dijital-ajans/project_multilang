<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class ProjectCategory extends Model
{
    protected $table = 'projectcategory';
    protected $guarded = [];


    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = [
        'title','slug'
    ];

    protected $fillable = [

    ];
}
