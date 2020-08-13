<?php

namespace App\Http\Controllers;

use Session;
use Auth;
use App\Locale;
use App\Image;
use App\Category;
use Illuminate\Http\Request;

class LocalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;
        $locals = Locale::where('user_id',$user_id)->get();

        return view('agency.locals.locals')->with('locals',$locals);
    }

    public function trash()
    {
        $f = Locale::onlyTrashed()->get();
        return view('agency.locals.trash')->with('locals',$f);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agency.locals.add')->with('categories',Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
 
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'wilaya'=>'required',
            'commune'=>'required',
            'category_id'=>'required',
            'surface'=>'required|numeric|min:10|max:1000',
            'pieces'=>'required|numeric|min:1|max:10',
            'garagenum'=>'numeric|min:1|max:5',
            'showernum'=>'numeric|min:1|max:5',
            // 'etage'=>'numeric|min:0|max:20',
            'pictures' => 'required',
            'pictures.*' => 'image|mimes:jpeg,png,jpg|max:2048',
            'desc'=>'required',
            'type'=>'required|in:sale,rent',
            'price'=>'required|digits_between:4,9',
            // 'advnum'=>'numeric|min:1|max:11',
        ]);
            // dd($request)->get();
        $user = Auth::user();
        $local = Locale::create([
            'user_id'=>$user->id,
            
            'wilaya'=>$request->wilaya,
            'commune'=>$request->commune,
            'category_id'=>$request->category_id,
            'surface'=>$request->surface,
            'pieces'=>$request->pieces,
            'desc'=>$request->desc,
            'vl'=>$request->type,
            'price'=>$request->price,
        ]);
        
            // generate unique slug 
        $input = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < 18; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }

        $local->slug = $random_string.$local->id ;
        // save images
            $files=$request->pictures;
            foreach($files as $file){
                $name=time().$file->getClientOriginalName();
                $file->move('upload\local',$name);
                // $images[]=$name;
                Image::create([
                    'locale_id'=>$local->id,
                    'link'=>'upload\local\\'.$name,
                ]);
            }

            // etage
            if(($request->category_id == 1) || ($request->category_id == 2) || ($request->category_id == 3)){
                $this->validate($request,[
                    'etage'=>'required|numeric|min:0|max:20',
                ]);
                $local->etage = $request->etage;
                $local->save();
            }

            // gardin and pool
            if(($request->category_id == 1) || ($request->category_id == 4)){
                if($request->has('gardin')){
                    $local->gardin = 1;
                    $local->save();
                }
                if($request->has('pool')){
                    $local->pool = 1;
                    $local->save();
                }
                
            }

            // rent
            if($request->type == ('rent')){
                $this->validate($request,[
                    'per'=>'required|in:day,week,month,year',
                    'adv'=>'required|in:day,week,month,year',
                    'advnum'=>'numeric|min:1|max:29'
                ]);
                    $local->per = $request->per;
                    $local->adv = $request->adv;
                    $local->advnum = $request->advnum;
                    $local->save();
                
            }

            if($request->has('papers')){
                $local->paper = 1;
                $local->save();
            }
            if($request->has('fur')){
                $local->furniture = 1;
                $local->save();
            }
            if($request->has('garage')){
                $local->nbrgarage = $request->garagenum;
                $local->save();
            }
            if($request->has('shower')){
                $local->nbrshower = $request->showernum;
                $local->save();
            }
        
        Session::flash('success','new local added');

        $images = Image::where('locale_id',$local->id)->get()->all();
        
        return view('agency.locals.main')->with('images',$images);
        // ;
        // return redirect('agency.locals.main')->back();
        
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $l = Locale::find($id);
        $u = Auth::user();
        if($l->user_id == $u->id){
            return view('agency.locals.edit')->with('local',Locale::find($id))
                                        ->with('categories',Category::all());
        }else{
            Session::flash('info','ak menytk wel :/');
            return redirect()->back();
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $l = Locale::find($id);
        $u = Auth::user();
        if($l->user_id == $u->id){
            $this->validate($request,[
                'wilaya'=>'required',
                'commune'=>'required',
                'category_id'=>'required',
                'surface'=>'required|numeric|min:10|max:1000',
                'pieces'=>'required|numeric|min:1|max:10',
                
                
                // 'etage'=>'numeric|min:0|max:20',
                'desc'=>'required',
                'type'=>'required|in:sale,rent',
                'price'=>'required|digits_between:4,9',
                // 'advnum'=>'numeric|min:1|max:11',
            ]);
                // dd($request)->get();
            $user = Auth::user();
            $local = Locale::find($id);

            $local->wilaya = $request->wilaya;
            $local->commune = $request->commune;
            $local->category_id = $request->category_id;
            $local->surface = $request->surface;
            $local->pieces = $request->pieces;
            $local->desc = $request->desc;
            $local->vl = $request->type;
            $local->price = $request->price;
            
            $local->save();
            
            // save images
               
    
                // etage
                if(($request->category_id == 1) || ($request->category_id == 2) || ($request->category_id == 3)){
                    $this->validate($request,[
                        'etage'=>'required|numeric|min:0|max:20',
                    ]);

                    $local->etage = $request->etage;
                    $local->save();
                }
    
                // gardin and pool
                if(($request->category_id == 1) || ($request->category_id == 4)){
                    if($request->has('gardin')){
                        $local->gardin = 1;
                        $local->save();
                    }else{
                        $local->gardin = 0;
                        $local->save();
                    }
                    if($request->has('pool')){
                        $local->pool = 1;
                        $local->save();
                    }else{
                        $local->pool = 0;
                        $local->save();
                    }
                    
                }
    
                // rent
                if($request->type == ('rent')){
                    $this->validate($request,[
                        'per'=>'required|in:day,week,month,year',
                        'adv'=>'required|in:day,week,month,year',
                        'advnum'=>'numeric|min:1|max:29'
                    ]);
                        $local->per = $request->per;
                        $local->adv = $request->adv;
                        $local->advnum = $request->advnum;
                        $local->save();
                    
                }
    
                if($request->has('papers')){
                    $local->paper = 1;
                    $local->save();
                }else{
                    $local->paper = 0;
                    $local->save();
                }
                if($request->has('fur')){
                    $local->furniture = 1;
                    $local->save();
                }else{
                    $local->furniture = 0;
                    $local->save();
                }
                if($request->has('garage')){
                    $this->validate($request,[
                        'garagenum'=>'numeric|min:1|max:5',
                    ]);
                    $local->nbrgarage = $request->garagenum;
                    $local->save();
                }else{
                    $local->nbrgarage = 0;
                    $local->save();
                }
                if($request->has('shower')){
                    $this->validate($request,[
                        'showernum'=>'numeric|min:1|max:5',
                    ]);
                    $local->nbrshower = $request->showernum;
                    $local->save();
                }else{
                    $local->nbrshower = 0;
                    $local->save();
                }
            
            Session::flash('success','local updated');
    
            
            return redirect()->back();
            // return view('home');
        }else{
            Session::flash('info','ha 9awed as ');
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $l=Locale::find($id);
        $l->delete();

        Session::flash('success','post trashed');
        return redirect()->back();
    }
    public function restore($id){
        $local=Locale::withTrashed()->where('id',$id)->first();
        $local->restore();

        Session::flash('success','local restored');
        return redirect()->back(); 
    }
    public function deletep($id){
        $local=Locale::withTrashed()->where('id',$id)->first();
        $local->forceDelete();

        Session::flash('success','local deleted permanently');
        return redirect()->back();        
    }
}
