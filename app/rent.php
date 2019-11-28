<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
        public function product()
        {
            return $this->belongsTo('App\Product');
        }
        
        public function user()
        {
            return $this->belongsToMany('App\User');
        }
}
