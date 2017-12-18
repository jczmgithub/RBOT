<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datosRobot extends Model
{
    protected $fillable = ['robot','motor','pasos','velocidad'];
}
