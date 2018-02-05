<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    protected $fillable = [
        'modelo', 'host', 'name'
    ];

    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
