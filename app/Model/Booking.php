<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table='bookings';
    Protected $fillable=['name','email','location','date','phone','time'];
}
