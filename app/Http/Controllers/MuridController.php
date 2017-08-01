<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\murid;
use App\orangtua;

class MuridController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $murid = murid::all();
        return view('murid.index', compact('murid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $ortu = orangtua::all();
        return view('murid.create', compact('ortu'));
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
         $murid = new murid;
        $murid ->nama = $request ->a;
        $murid ->orangtua_id = $request ->b;
        $murid ->jk = $request ->c;
        $murid ->umur = $request ->d;
        $murid ->alamat = $request ->e;
        $murid ->save();
        return redirect('murid');
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
        $murid = murid::findOrFail($id);
        $ortu = Orangtua::all();
        return view('murid.show',compact('murid','ortu'));
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
       $murid = Murid::findOrFail($id);
       $ortu = Orangtua::all();
        return view('murid.edit',compact('murid','ortu'));
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
        $murid = murid::findOrFail($id);
        $murid ->nama = $request ->a;
        $murid ->orangtua_id = $request ->b;
        $murid ->jk = $request ->c;
        $murid ->umur = $request ->d;
        $murid ->alamat = $request ->e;
        $murid ->save();
        return redirect('murid');
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
        $murid = murid::findOrFail($id);
        $murid ->delete();
        return redirect('murid');
         }
}
