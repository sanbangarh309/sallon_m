<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Clock extends Model
{
    protected $table = 'attendence';

    public function users(){
        return $this->hasMany('App\User', 'id','user_id');
    }

    public function employees(){
        return $this->hasMany('App\Models\Employee', 'id','employee_id');
    }
}
