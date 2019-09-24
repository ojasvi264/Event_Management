<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table='roles';
    protected $fillable=['name','status','created_by','updated_by'];

    function permissions(){
        return $this->belongsToMany(Permission::class);
    }
    function users() {
        return $this->hasMany(User::class);
    }
}
