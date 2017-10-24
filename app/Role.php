<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Defines and returns the relationship between users and roles as belongsToMany.
    public function users() {
        return $this->
                belongsToMany('App\User')
                ->withTimestamps();
    }
}
