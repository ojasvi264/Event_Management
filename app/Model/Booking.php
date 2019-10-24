<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table='bookings';
    Protected $fillable=['location','name','email','date','phone','time','event_id'];
}
function event(){
    return  $this->belongsTo(Event::class);
}
