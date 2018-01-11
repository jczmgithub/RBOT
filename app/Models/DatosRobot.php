<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DatosRobot extends Model
{
    protected $fillable = ['robot','motor','pasos','velocidad'];
}
