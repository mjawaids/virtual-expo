<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analytic extends Model
{
    public $primaryKey = 'stand_id';
    public $timestamps = false;
    public $incrementing = false;
    protected $guarded = [];
}
