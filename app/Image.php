<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=[
        'locale_id','link','main',
    ];

    public function local(){
        return $this->belongsTo('App\Locale');
     }
}
