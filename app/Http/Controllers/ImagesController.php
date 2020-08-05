<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Session;

class ImagesController extends Controller
{
    public function main(Request $request){
        $this->validate($request,[
            'image_radio'=>'required'
        ]);
        $image_id = $request->image_radio;
        $l = Image::find($image_id);
        $l->main = 1;
        $l->save();

        Session::flash('success','main picture saved');
        return redirect()->route('home');
    }
}
