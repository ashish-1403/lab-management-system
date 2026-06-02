<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable=[

        'patient_code',
        'name',
        'gender',
        'dob',
        'phone',
        'email',
        'address'

    ];
}