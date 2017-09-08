<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'logo', 'admin', 'email', 'phone', 'website', 'facebook', 'twitter', 'marketing_doc'
    ];

    /**
     * Get the stands for the company.
     */
     public function stands()
     {
         return $this->hasMany('App\Stand');
     }
}
