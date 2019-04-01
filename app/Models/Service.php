<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    public function category(){
        return $this->hasOne('App\Models\Category', 'id','category_id');
    }
}
