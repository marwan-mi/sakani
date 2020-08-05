<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Locale extends Model
{
    use SoftDeletes;

    protected $fillable=[
        'id_user','wilaya','commune','category_id','surface','pieces','desc','vl','price','nbrgarage','nbrshower','etage','gardin','pool','furniture','paper',
    ];

    protected $dates=['deleted_at'];

    public function category(){
        return $this->belongsTo('App\Category');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function images(){
        return $this->hasMany('App\Image');
    }
    
}
