<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analytic extends Model
{
    public $primaryKey = 'stand_id';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];

    /**
     * Get the stands for the analytic.
     */
     public function stand()
     {
        return $this->belongsTo('App\Stand');
     }
}
