<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table ='sliders';
    protected $fillable=['title','description','image','link','status','updated_by','created_by'];
}
