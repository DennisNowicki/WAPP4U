<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{   
    protected $table = 'components'; 
    public $primaryKey = 'id';
    public $timestamps = false;
}
