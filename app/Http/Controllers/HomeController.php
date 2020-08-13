<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Locale;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user->admin == 1){
            return view('home')->with('admin',1);
        }else{
            $id_user = $user->id;
            $locals = Locale::where('user_id',$id_user)->get();
            $vs=0;$ps=0;$ss=0;$as=0;$vr=0;$pr=0;$sr=0;$ar=0;
            foreach($locals as $local){
                if($local->vl == ('sale')){
                    switch ($local->category->name) {
                        case ('Villa'):
                            $vs++;
                            break;
                        case ('Apartement'):
                            $ps++;
                            break;
                        case ('Studio'):
                            $ss++;
                            break;
                        case ('Arab house'):
                            $as++;
                            break;
                        default: break;
                      }
                }elseif($local->vl == ('rent')){
                    switch ($local->category->name) {
                        case ('Villa'):
                            $vr++;
                            break;
                        case ('Apartement'):
                            $pr++;
                            break;
                        case ('Studio'):
                            $sr++;
                            break;
                        case ('Arab house'):
                            $ar++;
                            break;
    
                        default: break;
                      }
                }
            }
    
            return view('home')->with('admin',0)->with('vs',$vs)->with('ps',$ps)->with('ss',$ss)->with('as',$as)->with('vr',$vr)->with('pr',$pr)->with('sr',$sr)->with('ar',$ar);
        }
       
                        
    }

    public function pay(){
        return view('agency.pay.pay');
    }
}
