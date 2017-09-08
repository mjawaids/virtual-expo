<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
    /**
     *  Type casts fields when returning to views 
     */
    protected $casts = [
        'reserved' => 'boolean',
    ];

    /**
     * Get the event of the stand.
     */
     public function event()
     {
         return $this->belongsTo('App\Event');
     }

    /**
     * Get the company of the stand.
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
     * Get the analytics of the stand.
     */
    public function analytics()
    {
        return $this->hasOne('App\Analytic');
    }

    /*
    *   Get the stands for an event
    */
    public static function getEventStands($event_id)
    {
        return static::where('event_id', '=', $event_id)->with('company')->with('event')->get();
    }

    /*
    *   Reserve the stand for company
    */
    public function reserve($company)
    {
        $this->reserved = true;
        $this->company()->associate($company);
        $this->save();
    }
}
