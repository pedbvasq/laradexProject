<?php

namespace Laradex;

use Illuminate\Database\Eloquent\Model;

class dynamic extends Model
{


    public function atributos(){

    }
    public function trainer(){
       return $this-> hasMany('Laradex\Trainer');
    }



}
