<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    protected $guarded = [];

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = [
        'title','content','slug'
    ];

    protected $fillable = [
        'image'
        ];
}
