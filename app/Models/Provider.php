<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $fillable = ['name','email', 'password'];
    protected $table = 'providers';
}
