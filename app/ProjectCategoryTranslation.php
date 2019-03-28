<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCategoryTranslation extends Model
{
    protected $table = 'projectcategory_translation';
    protected $guarded = [];
    public $timestamps = false;
    protected $fillable = ['title','slug'];
}
