<?php

namespace  Laradex\Http\Controllers;

use Laradex\Http\Controllers\Controller;

class PruebaController extends Controller{
    public function prueba(){
        return view("pokemones.index");
    }
}
