@extends('layouts.index')

@section('content')
<!-- Page Heading -->
<div class="heading d-flex justify-content-between">
  <div>
    <h1 class="h3 mb-2 text-gray-800">Tambah Poli klinik</h1>
    <p class="mb-4">Berikut form tambah data pasien</p>
  </div>

</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 table-data-pasien">
    <h6 class="m-0 font-weight-bold ">Tambah data pasien</h6>
  </div>
  <div class="card-body">
    <div class="tambah-pasien">
      <form action="/tambah-pasien" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama">Nama Poli</label>
          <input type="text" class="form-control" id="nama" name="nama_poli" placeholder="Masukkan nama poli klinik">
        </div>
        <div class="form-group">
          <label for="alamat">Gedung</label>
          <input type="text" class="form-control" id="alamat" name="gedung" placeholder="Masukkan alamat pasien">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </div>
</div>
@endsection