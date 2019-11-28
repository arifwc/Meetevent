<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function rent(){
        return $this->hasMany('App\Rent');
    }

    public function vendor()
    {
        return $this->belongsTo('App\Vendor');
    }
}
