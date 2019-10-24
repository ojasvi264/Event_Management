<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    Protected $fillable = ['event_id', 'image', 'rank', 'title', 'status'];
}
function event(){
    return  $this->belongsTo(Event::class);
}
