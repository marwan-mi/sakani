<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function local(){
        return $this->belongsTo('App\Locale');
     }
}
