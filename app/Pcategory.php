<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD:app/ProjectCategory.php

class ProjectCategory extends Model
=======
class Pcategory extends Model
>>>>>>> master:app/Pcategory.php
{
    protected $table = 'pcategory';
    protected $guarded = [];


    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = [
        'title','slug'
    ];

    protected $fillable = [

    ];
}
