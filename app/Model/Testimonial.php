<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $table = 'testimonials';
    Protected $fillable = ['name', 'title', 'rank', 'description','image','designation',];
}
