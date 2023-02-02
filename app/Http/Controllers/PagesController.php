<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\dokter;
use App\Models\Obat;

class PagesController extends Controller
{
    public function getData()
    {
        return Pasien::all();
    }

    public function dashboard()
    {
        $pasiens = self::getData();
        $count_pasien = count($pasiens);
        return view('pages.dashboard', compact('count_pasien', 'pasiens'));
    }

    public function DataPasien()
    {
        $pasiens = self::getData();

        return view('pages.data-pasien', compact('pasiens'));
    }

    public function dokter()
    {
        $dokters = dokter::all();
        return view('pages.dokter', compact('dokters'));
    }

    public function tambah_dokter()
    {
        return view('pages.form.tambah-dokter');
    }


    public function DataRekamMedis()
    {
        return view('pages.data-rekam-medis');
    }

    public function tambah_pasien()
    {
        return view('pages.form.tambah-pasien');
    }
    public function data_poli()
    {
        return view('pages.data-poli-klinik');
    }
    public function rekam_medis()
    {
        $pasiens = self::getData();
        $dokters = dokter::all();
        $obats = Obat::all();
        return view('pages.form.tambah-rekam-medis', compact('pasiens', 'dokters', 'obats'));
    }
}
