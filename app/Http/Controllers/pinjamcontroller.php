<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pinjam;
use App\Models\mobil;

class pinjamcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pinjam=pinjam::all();
        return view("buatotabelsatulagi", [
            'pinjams'=>$pinjam,
            'title'=>'List Peminjam'
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mobil=mobil::all();
        return view('createpinjam',[
            'mobil'=>$mobil
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
        pinjam::create([
            'namap'=>$request->namap,
            'ktp'=>$request->ktp,
            'mobilp'=>$request->mobilp
        ]);
        return redirect(route('pinjam.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view("showpin", [
            'title'=>'pinjam',
            'pinjam'=>pinjam::where('id', $id)->get()->first()
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
        $pinjam=pinjam::findOrFail($id);
        $mobil=mobil::all();
        return view("editp", [
            'pinjam'=>$pinjam,
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
        $pinjam=pinjam::findOrFail($id);
        $pinjam->update([
            'namap'=>$request->namap,
            'ktp'=>$request->ktp,
            'mobilp'=>$request->mobilp
        ]);
        return redirect(route('pinjam.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pinjam=pinjam::findOrFail($id);
        $pinjam->delete();
        return redirect(route('pinjam.index'));
    }
}
