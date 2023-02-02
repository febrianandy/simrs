@extends('layouts.index')

@section('content')
<!-- Page Heading -->
<div class="heading d-flex justify-content-between">
  <div>
    <h1 class="h3 mb-2 text-gray-800">Tambah Rekam Medis</h1>
    <p class="mb-4">Berikut adalah daftar data pasien</p>
  </div>

</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 table-data-pasien">
    <h6 class="m-0 font-weight-bold ">Data Rekam Medis</h6>
  </div>
  <div class="card-body">
    <div class="tambah-pasien">
      <form action="/tambah-pasien" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama">ID Rekam Medis</label>
          @php
          // id with date second
          $id = date('YmdHis');
          // random number
          $random_number = rand(100, 999);
          // random date

          $random_date = $id . $random_number;

          // echo $random_date;
          @endphp
          <input type="text" class="form-control" id="nama" name="nama" disabled value="RE {{ $random_date }}">
        </div>
        <div class="form-group">
          <label for="nama">Pasien</label>
          <select name="pasien" id="pasien" class="form-control">
            @foreach ($pasiens as $p)
            <option value="{{ $p->id }}">{{ $p->nama }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="alamat">Keluhan</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="keluhan">
        </div>
        <div class="form-group">
          <label for="no_hp">Dokter</label>
          <select name="dokter" id="" class="form-control">
            @foreach ($dokters as $d)
            <option value="{{ $d->id }}">{{ $d->nama }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="tanggal_lahir">Diagnosa</label>
          <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="diagnosa">
        </div>
        <div class="form-group">
          <label for="no_hp">Obat</label>
          <select name="dokter" id="" class="form-control">
            @foreach ($obats as $o)
            <option value="{{ $o->id }}">{{ $o->nama_obat }}</option>
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </div>
</div>
@endsection