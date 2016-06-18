<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
	    protected $table = '_country';
	    protected $fillable =['name'];
    //
	    public $timestamps = false;
}
