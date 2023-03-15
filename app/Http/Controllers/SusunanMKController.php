<?php

namespace App\Http\Controllers;

use App\Models\susunanMK;
use Illuminate\Http\Request;

class SusunanMKController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('susunanMKView', [
            'MK' => susunanMK::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kodeMK' => 'required', 
            'namaMK' => 'required', 
            'bk', 
            'sks' => 'required', 
            'smt' => 'required', 
            'keterangan' => 'required'
        ]);

        $request['bk'] = implode(', ' , $request->bk);
        susunanMK::create($request->all());
        return redirect()->route('susunanMK.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(susunanMK $susunanMK)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(susunanMK $susunanMK)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, susunanMK $susunanMK)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(susunanMK $susunanMK)
    {
        $susunanMK->delete();
        return redirect()->route('susunanMK.index');
    }
}
