<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

      protected $table = 'contacts';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'organisation', 'phonenumber', 'address', 'zipcodeandcity'
    ];

}
