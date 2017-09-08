<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * Get the stands for the event.
     */
     public function stands()
     {
         return $this->hasMany('App\Stand');
     }

    /**
     * Get the location of the event.
     */
    public function location()
    {
        return $this->belongsTo('App\Location');
    }
}
