<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'names', 
        'last_names',
        'dni',
        'phone',
        'address',
        'driver_id',
        'city_id',
        'zip_code'
    ];
}
