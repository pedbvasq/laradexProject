<?php

namespace Laradex;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    protected $fillable = ["name","avatar"];
    //
    public function getRouteKeyName(){
       return "slug";
    }

    public function pokemons(){
       return $this-> hasMany('Laradex\Pokemon');
    }
}
