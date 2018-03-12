<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Play extends Model
{

     protected $fillable = [
      'longitud', 'juego','time','user_id'
    ];
}
