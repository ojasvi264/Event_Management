<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'teams';
    Protected $fillable = ['name', 'title', 'rank','image','designation','fb_link','twitter_link','linkedin_link'];
}
