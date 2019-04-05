<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function services()
    {
        return $this->hasMany('App\Models\Service','category_id');
    }
}
