<?php 

namespace LaravelForum;

use Illuminate\Database\Eloquent\Model as BaseModel;

class Model extends BaseModel 
{
    /**
    *   used for mass asignments
    *   if empty it disables it
    */
    protected $quarded = [];
}