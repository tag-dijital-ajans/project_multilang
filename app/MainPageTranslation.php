<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainPageTranslation extends Model
{
    protected $table = 'mainpagesetting_translation';
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = ['textheader','text'];
}
