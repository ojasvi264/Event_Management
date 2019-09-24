<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='users';
    protected $fillable=['role_id','name','email','password'];

    function role(){
        return $this->belongsTo(Role::class);
    }
}
