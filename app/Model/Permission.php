<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table='permissions';
    protected $fillable=['module_id','name','route','status','created_by','updated_by'];

    function roles(){
        return $this->belongsToMany(Role::class);
    }

    function module(){
        return $this->belongsTo(Module::class);
    }
}
