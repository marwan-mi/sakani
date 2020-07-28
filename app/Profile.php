<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=[
        'user_id','agency_name','adress','phone-number-1','Phone-number-2','fb','local-picture','register_picture','avatar'
    ];
    
    public function user(){
        return $this->belongsTo('App\User');
     }
}
