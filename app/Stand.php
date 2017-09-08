<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stand extends Model
{
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
}
