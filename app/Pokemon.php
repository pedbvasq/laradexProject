<?php

namespace Laradex;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class Pokemon extends Model
{

     public function trainer()
        {
            return $this->belongsTo('Laradex\Trainer');
        }
}
