<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Country;

class State extends Model
{
    public $fillable=['country_id','name'];
    protected $table='_state';

     public function state()
    {
        return $this->hasOne(Country::class);
    }
}
