<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $table='modules';
    protected $fillable=['name','route','status','created_by','updated_by'];

    function permissions() {
        return $this->hasMany(Permission::class);
    }
}
