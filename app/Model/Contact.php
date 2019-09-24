<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    Protected $fillable = ['name', 'email', 'subject', 'message'];
}
