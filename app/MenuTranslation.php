<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuTranslation extends Model
{
    protected $table = 'navmenu_translation';
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = ['title'];
}
