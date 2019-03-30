<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Dimsav\Translatable\Translatable;
class MainPage extends Model
{
    protected $table = 'mainpagesetting';
    protected $guarded = [];

    use \Dimsav\Translatable\Translatable;

    public $translatedAttributes = [
        'textheader','text'
    ];

    protected $fillable = [
        'blog','project','service'
    ];

}
