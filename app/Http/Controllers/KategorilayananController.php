<?php

namespace App\Http\Controllers;

use App\Kategorilayanan;
use Illuminate\Http\Request;
use App\Http\Requests\KategorilayananRequest;

class KategorilayananController extends Controller
{
    public function getKatlayanan()
    {
        return Kategorilayanan::all();
    }
    
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
        //
    }

    public function store(Request $request)
    {
        $dt = new Kategorilayanan;
        $dt->nama = $request->nama;
        $dt->status = $request->status;
        $dt->save();
        return $dt;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategorilayanan  $kategorilayanan
     * @return \Illuminate\Http\Response
     */
    public function show(Kategorilayanan $kategorilayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategorilayanan  $kategorilayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kategorilayanan $kategorilayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kategorilayanan  $kategorilayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kategorilayanan $kategorilayanan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kategorilayanan  $kategorilayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($kategorilayanan)
    {
        Kategorilayanan::where('id',$kategorilayanan)->delete();
    }
}
