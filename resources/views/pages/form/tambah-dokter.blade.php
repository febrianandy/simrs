@extends('layouts.index')

@section('content')
<!-- Page Heading -->
<div class="heading d-flex justify-content-between">
  <div>
    <h1 class="h3 mb-2 text-gray-800">Tambah Dokter</h1>
    <p class="mb-4">Berikut form tambah data obat</p>
  </div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 table-data-pasien">
    <h6 class="m-0 font-weight-bold ">Tambah data dokter</h6>
  </div>
  <div class="card-body">
    <div class="tambah-pasien">
      @if (session('success'))
      <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2000)">
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
      </div>
      @endif
      <form action="/tambah-dokter" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama">Nip</label>
          <input type="text" class="form-control" id="nama" name="nip" placeholder="Masukkan nip dokter"
            value="{{ old('nip') }}">
          @error('nip')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Nama</label>
          <input type="text" class="form-control" id="email" name="nama" placeholder="Nama" value="{{ old('nama') }}">
          @error('nama')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Spesialis</label>
          <input type="text" class="form-control" id="email" name="spesialis" placeholder="Spesialis"
            value="{{ old('spesialis') }}">
          @error('spesialis')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="alamat">No Hp</label>
          <input type="text" class="form-control" id="alamat" name="no_telp" placeholder="Masukkan nomor telpun"
            value="{{ old('no_telp') }}">
          @error('no_telp')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="jenis_kelamin">Alamat</label>
          <input type="text" class="form-control" id="jenis_kelamin" name="alamat" placeholder="Masukkan alamat"
            value="{{ old('alamat') }}">
          @error('alamat')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="aksi">
          <a href="/data-pasien" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Tambah Dokter</button>
        </div>
    </div>

  </div>
</div>
@endsection