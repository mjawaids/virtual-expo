<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     *  Type casts fields when returning to views 
     */
    protected $casts = [
        'latitude' => 'decimal',
        'longitude' => 'decimal',
    ];

    /**
     * Get the events for the location.
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
