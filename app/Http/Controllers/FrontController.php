<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Locale;
use App\Image;
use App\Category;
use App\Profile;

class FrontController extends Controller
{
    public function index(){

        return view('index')->with('locals',Locale::orderBy('created_at','desc')->take(4)->get())
                            ->with('s_locals',Locale::where('vl','sale')->take(5)->get())
                            ->with('r_locals',Locale::where('vl','rent')->take(5)->get())
                            ->with('categories',Category::all());
    }

    public function detail($slug){

        $local = Locale::where('slug',$slug)->get()->first();
        return view('detail')->with('local',$local)
                            ->with('images',Image::where('locale_id',$local->id)->get())
                            ->with('suj',Locale::all()->take(5))
                            ->with('categories',Category::all());
    }
    public function profile($slug){
        
        $profile = Profile::where('slug',$slug)->get()->first();
        $user = $profile->user_id;
        $locals = Locale::where('user_id','=',$user)->get(); 

        return view('profile')->with('locals',$locals)
                            ->with('categories',Category::all())
                            ->with('profile',$profile);;
    }

    public function filter(Request $request){
        // surface minimum
        if($request->has('surmin')){
            $surface_min = $request->surmin;
        }else{
            $surface_min = 1;
        }

        // surface maxmimum
        if($request->has('surmax')){
            $surface_max = $request->surmax;
        }else{
            $surface_max = 1000;
        }

        // pieces 
        if($request->has('pieces ')){
            $pieces  = $request->pieces ;
        }else{
            $pieces  = 20;
        }

        // etage 
        if($request->has('etage')){
            $etage = $request->etage;
        }else{
            $etage = 20;
        }

        // min prix 
        if($request->has('prixmin')){
            $prixmin = $request->prixmin;
        }else{
            $prixmin = 1;
        }

        // max prix
        if($request->has('prixmax')){
            $prixmax = $request->prixmax;
        }else{
            $prixmax = 100000000;
        }

        // gardin
        if($request->has('gardin')){
            $gardin = 1;
        }else{
            $gardin = 0;
        }

        // pool
        if($request->has('pool')){
            $pool = 1;
        }else{
            $pool = 0;
        }

        // fur
        if($request->has('fur')){
            $fur = 1;
        }else{
            $fur = 0;
        }

        // garage
        if($request->has('garage')){
            $garage = 1;
        }else{
            $garage = 0;
        }
            

        $locals = Locale::where('vl','like','%'.$request->vl.'%')
                            ->where('category_id','=',$request->category_id)
                            ->where('commune','like','%'.$request->commune.'%')
                            ->whereBetween('surface',array($surface_min, $surface_max))
                            ->where('pieces','<=',$pieces)
                            ->where('etage','<=',$etage)
                            ->whereBetween('price',array($prixmin, $prixmax))
                            
                            ->get();
        

        return view('search')->with('locals',$locals)
                            ->with('categories',Category::all());
    }
}
