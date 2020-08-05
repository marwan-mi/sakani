<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function locals(){
        
        return $this->hasMany('App\Locale');
    }

}
