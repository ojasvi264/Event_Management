<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table ='events';
    Protected $fillable=['category_id','name','title','slug','date','registration','location','cost','description','status','meta_keyword','meta_description','created_by','updated_by','image'];
}
function category(){
    return  $this->belongsTo(Category::class);
}
function galleries(){
    return $this->hasMany(Gallery::class);
}
function bookings(){
    return $this->hasMany(Booking::class);
}
