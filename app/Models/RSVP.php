<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RSVP extends Model
{
    protected $fillable = ['event_id', 'name', 'email'];
}

