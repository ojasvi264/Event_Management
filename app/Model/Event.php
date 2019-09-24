<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table ='events';
    Protected $fillable=['name','title','date','registration','location','cost','description','status','meta_keyword','meta_description','created_by','updated_by','image'];
}
