<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    protected $table = 'employees';

    protected $fillable = [
        'fullname',
        'email',
        'mobile_phone',
        'date_of_birth',
        'address'
    ];

}