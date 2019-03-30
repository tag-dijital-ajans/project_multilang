<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model
{
    protected $table = 'navmenu';
    protected $guarded = [];


    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = [
        'title'
    ];

    protected $fillable = [
        'url','topnav','page','order'
    ];




    public function topnavmenu() {

        return $this->belongsTo('App\Menu','navmenu_id');
    }
    public function bottommenu() {

        return $this->hasMany('App\Menu','topnav');
    }


}
