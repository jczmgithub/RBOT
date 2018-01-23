<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    protected $fillable = [
        'user_id', 'modelo', 'host',
    ];
}
