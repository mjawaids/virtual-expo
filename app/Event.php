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

    /*
    *   Get upcoming events
    */
    public static function getUpcoming()
    {
        return static::where('start_date', '>', now())->with('location')->get();
    }

    /*
    *   Get current events
    */
    public static function getCurrent()
    {
        return static::where([
                            ['start_date', '<', now()],
                            ['end_date', '>', now()],
                        ])->with('location')->get();
    }

    /*
    *   Get Past events
    */
    public static function getPast()
    {
        return static::where('end_date', '<', now())->with('location')->get();
    }
}
