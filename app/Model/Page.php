<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table ='pages';
    Protected $fillable=['name','slug','url','status','static_key','image','title','description','short_description'];
}
