<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mobil;

class mobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mobil=mobil::all();
        return view("mobil",[
            'mobils'=>$mobil,
            'title' => 'List Mobil'
            ]); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create', [

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        mobil::create([
            'merk'=>$request->merk,
            'nama'=>$request->nama,
            'plat'=>$request->plat
        ]);
        return redirect(route('mobil.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("show", [
            'title'=>'mobil',
            'mobil'=>mobil::where('nama',$id)->get()->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mobil=mobil::findOrFail($id);
        return view("editmob",[
            'title'=>'editmob',
            'mobil'=>$mobil
        ]);
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
        $mobil=mobil::findOrFail($id);
        $mobil->update([
            'merk'=>$request->merk,
            'nama'=>$request->nama,
            'plat'=>$request->plat
        ]);
        return redirect(route('mobil.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mobil=mobil::findOrFail($id);
        $mobil->delete();
        return redirect(route('mobil.index'));
    }
}
