<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';
    Protected $fillable = ['category_id', 'name', 'description', 'image', 'title'];
}
