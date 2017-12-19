<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    protected $fillable = [
        'idUsuario', 'modelo', 'direccion',
    ];
}
