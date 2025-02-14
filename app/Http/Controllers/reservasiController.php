<?php

namespace App\Http\Controllers;

use App\reservasi;
use Illuminate\Http\Request;

class reservasiController extends Controller
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
        $request->validate([
            'tglcekin' => 'required',
            'tglcekout' => 'required',
            'jml_kmr' => 'required',
            'nm_pemesan' => 'required',
            'nm_tamu' => 'required',
            'tipe_kamar' => 'required',
            'email' => 'required',
            'notlp' => 'required',
            
            ]);
            // reservasi::create($request->all());
            dd($request);
    return redirect()->route('reservasi.index')->with('success','Data berhasil di input');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function show(reservasi $reservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function edit(reservasi $reservasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservasi $reservasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\reservasi  $reservasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservasi $reservasi)
    {
        //
    }
}
