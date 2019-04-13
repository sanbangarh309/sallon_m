<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Attendence extends Model
{
    protected $table = 'attendence';

    public function employees()
    {
        return $this->hasOne('App\Models\Employee','id','user_id');
    }

    public function customers()
    {
        return $this->hasOne('App\User','id','user_id');
    }

    public function provider(){
        return $this->hasOne('App\Models\Provider', 'id','provider_id');
    }
}
