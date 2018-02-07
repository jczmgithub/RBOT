<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    protected $fillable = [
        'modelo', 'host', 'name', 'user_id'
    ];

    public function users() {
        return $this->belongsToMany('App\Models\User', 'user_robot', 'user_id', 'robot_id');
    }

    public function empleados() {
        return $this->belongsToMany('App\Models\User', 'user_robot', 'robot_id', 'user_id');
    }

}
