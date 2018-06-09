<?php

namespace App\Http\Controllers;

use App\kue;
use Illuminate\Http\Request;

class KueController extends Controller
{
    public function index()
    {
        //$kue = kue::all();
        return view('kue.createKue');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('kue.createKue');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kue = $this -> validate(request(), [
        'nama_kue'=> 'required',
        'harga'=> 'required'
        ]);
    kue::create($kue);
    return redirect('/kue');
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
        $kue = kue::find($id);
        return view('kue.editKue', compact('kue', 'id'));
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
        $kue = kue::find($id);
        $this->validate(request(), [
        'nama_kue'=> 'required',
        'harga'=> 'required',
        ]);
        $kue->nama_kue = $request->get('nama_kue');
        $kue->harga = $request->get('harga');
        $kue->save();
        return redirect('/kue');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kue = kue::findOrFail($id);
        $kue->delete();
        return redirect('/kue');
    }
}
