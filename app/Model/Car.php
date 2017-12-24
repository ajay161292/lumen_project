<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Car extends Model 
{
    // use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['make','model','year'];

}
