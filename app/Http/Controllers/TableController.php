<?php

namespace Laradex\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Laradex\Trainer;
class TableController extends Controller
{



public function store(Request $request,Trainer $trainer)


    {





    }



public function removeTable($table_name)
    {
        Schema::dropIfExists($table_name);

        return true;
    }
}
