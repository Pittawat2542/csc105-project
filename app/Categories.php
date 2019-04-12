<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    /**
     * The attributes that are mass assignable.
     * id,breed,section,provisional,country,url,image,pdf
     * @var array
     */
    protected $fillable = ['breed', 'section', 'provisional', 'country', 'url', 'image', 'pdf'];

}
