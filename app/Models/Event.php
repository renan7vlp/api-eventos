<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'date'];

    // Apenas eventos futuros
    public function scopeFuture($query)
    {
        return $query->where('date', '>=', now());
    }
}
