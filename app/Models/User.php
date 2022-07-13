<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  public function Collegamento()
    {
        return $this->hasMany('App\Models\Collegamento');
    }
  }
?>