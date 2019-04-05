<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'appointments';

    public function employees()
    {
        return $this->hasMany('App\Models\Employee','id','employee_id');
    }

    public function user()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
