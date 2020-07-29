<?php

namespace App\Http\Controllers;

use Session;
use App\Locale;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agency.locals.add');
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
            'typel'=>'required|in:villa,apartement,studio,arab',
            'surface'=>'required|numeric|min:10|max:1000',
            'pieces'=>'required|numeric|min:1|max:10',
            // 'garagenum'=>'numeric|min:1|max:5',
            // 'showernum'=>'numeric|min:1|max:5',
            // 'etage'=>'numeric|min:0|max:20',
            // 'pictures'=>'required',
            'desc'=>'required',
            'type'=>'required|in:sale,rent',
            'price'=>'required|digits_between:4,9',
            'advnum'=>'numeric|min:1|max:11',
        ]);
            dd($request)->get();
        // $local = Locale::create([
        //     'wilaya'=>$request->wilaya,
        //     'commune'=>$request->comunne,
        //     'typel'=>$request->typel,
        //     'surface'=>$request->surface,
        //     'pieces'=>$request->pieces,
        //     'desc'=>$request->desc,
        //     'type'=>$request->type,
        //     'price'=>$request->price,
        // ]);
        
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
