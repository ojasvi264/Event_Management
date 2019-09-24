<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    protected $table ='configurations';
    Protected $fillable=['name','email','phone','website','address','count','logo','fav_icon','googlemap_link','fb_link','insta_link','twitter_link','google_link','vimeo_link','created_by','updated_by'];
}
