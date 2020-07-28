<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use Auth;
use Session;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agency.profile.edit')->with('user',Auth::user());
                                         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
    public function update_agency(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'adress' => 'required|string|max:255',
            'phone1' => 'digits_between:10,12',
            'phone2' => 'digits_between:10,12',
            'fb' => 'string|max:255',
            'email' => 'required|string|email|max:255',
        ]);
        $user = Auth::user();
        $profile = $user->profile;


        if($request->hasFile('avatar')){
            $this->validate($request,[
                'avatar' => 'image',
            ]);
            $av=$request->avatar;
            $new_av=time().$av->getClientOriginalName();
            $av->move('upload\avatar\agency_avatar', $new_av);
            $profile->avatar = 'upload\avatar\agency_avatar\\'.$new_av;
            $profile->save();
            
        }
        if($request->hasFile('local-picture')){
            $this->validate($request,[
                'local_picture' => 'image',
            ]);
            $f1=$request->local_picture;
            $new_f1=time().$f1->getClientOriginalName();
            $f1->move('upload\agency\agency_local', $new_f1);
            $profile->local_picture = 'upload\agency\agency_local\\'. $new_f1;
            $profile->save();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        if($request->has('password')){
            $this->validate($request,[
                'password' => 'string|min:6|confirmed',
            ]);
           $user->password = bcrypt($request->password); 
        }
        $user->save();

        $profile->adress = $request->adress;
        $profile->phone1 = $request->phone2;
        if($request->has('phone2')){
            $profile->phone2 = $request->phone2; 
         }
        $profile->fb = $request->fb;
        $profile->adress = $request->adress;

        $profile->save();

        Session::flash('success',"informations updated");
        return redirect()->back();
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
