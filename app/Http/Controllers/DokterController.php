<?php

namespace App\Http\Controllers;

use App\Http\Requests\DokterRequest;
use Illuminate\Http\Request;
use App\Models\dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.form.tambah-dokter');
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
    public function store(DokterRequest $request)
    {
        //Tambah Dokter
        $dokter = new dokter;
        $dokter->nip = $request->nip;
        $dokter->nama = $request->nama;
        $dokter->spesialis = $request->spesialis;
        $dokter->no_telp = $request->no_telp;
        $dokter->alamat = $request->alamat;
        $dokter->save();

        return redirect()->back()->with('success', 'Data Dokter Berhasil Ditambahkan');
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
        // Edite Dokter
        $dokter = dokter::find($id);

        return view('edit_dokter', compact('dokter'));
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
