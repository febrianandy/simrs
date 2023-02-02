<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use Illuminate\Support\Facades\Redis;
use App\Http\Requests\PasienRequest;

class PasienController extends Controller
{
  public function index()
  {
    return view('pages.form.tambah-pasien');
  }

  public function tambah_pasien(PasienRequest $request)
  {

    Pasien::create([
      'nama' => $request->nama,
      'email' => $request->email,
      'alamat' => $request->alamat,
      'no_telp' => $request->no_telp,
      'jenis_kelamin' => $request->jenis_kelamin,
    ]);

    return redirect()->back()->with('success', 'Data berhasil ditambahkan');
  }
}
