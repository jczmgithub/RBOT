<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tarifa', 'credito', 'owner'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'credito'
    ];

    /*public function robots() {
        return $this->hasMany('App\Models\Robot');
    }
    */

    public function robots() {
        return $this->belongsToMany('App\Models\Robot');
    }

    public function isOwner(){
        if ($this->owner == "-1") {
            return true;
        } else {
            return false;
        }
//        return $this -> user()->where('owner', 'true')->first();
    }
    public function isEmploy($id){
        $query = DB::table("users")->where('owner', '=', $id)->get();
        return $query;
    }
}
