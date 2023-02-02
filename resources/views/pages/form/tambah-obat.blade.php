@extends('layouts.index')

@section('content')
<!-- Page Heading -->
<div class="heading d-flex justify-content-between">
  <div>
    <h1 class="h3 mb-2 text-gray-800">Tambah Obat</h1>
    <p class="mb-4">Berikut form tambah data obat</p>
  </div>

</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 table-data-pasien">
    <h6 class="m-0 font-weight-bold ">Tambah data obat</h6>
  </div>
  <div class="card-body">
    @if (session('success'))
    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)">
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    </div>
    @endif
    <div class="tambah-pasien">
      <form action="/tambah-obat" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama">Nama Obat</label>
          <input type="text" class="form-control" id="nama" name="nama_obat" placeholder="Masukkan nama obat">
          @error('nama_obat')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="alamat">Jenis Obat</label>
          <input type="text" class="form-control" id="alamat" name="jenis_obat" placeholder="Masukkan jenis obat">
          @error('jenis_obat')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="no_hp">Harga</label>
          <input type="text" class="form-control" id="no_hp" name="harga" placeholder="Masukkan harga">
          @error('harga')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="stok">Stock</label>
          <input type="text" class="form-control" id="stok" name="stok" placeholder="Masukkan stok">
          @error('stok')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

  </div>
</div>
@endsection