<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $table = 'applications'; 
    public $primaryKey = 'id';
    public $timestamps = false;
}
