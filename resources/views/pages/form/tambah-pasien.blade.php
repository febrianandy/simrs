@extends('layouts.index')

@section('content')
<!-- Page Heading -->
<div class="heading d-flex justify-content-between">
  <div>
    <h1 class="h3 mb-2 text-gray-800">Tambah Pasien</h1>
    <p class="mb-4">Berikut adalah daftar data pasien</p>
  </div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 table-data-pasien">
    <h6 class="m-0 font-weight-bold ">Tambah data pasien</h6>
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
      <form action="/tambah-pasien" method="POST">
        @csrf
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama pasien"
            value="{{ old('nama') }}">
          @error('nama')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" id="email" name="email" placeholder="Email"
            value="{{ old('email') }}">
          @error('email')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan alamat pasien"
            value="{{ old('alamat') }}">
          @error('alamat')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="no_hp">No HP</label>
          <input type="text" class="form-control" id="no_hp" name="no_telp" placeholder="Masukkan no hp pasien"
            value="{{ old('no_telp') }}">
          @error('no_telp')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="form-group">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
          </select>
          @error('jenis_kelamin')
          <div class="text-danger ">{{ $message }}</div>
          @enderror
        </div>
        <div class="aksi">
          <a href="/data-pasien" class="btn btn-warning">Kembali</a>
          <button type="submit" class="btn btn-primary">Tambah Pasien</button>
        </div>
    </div>

  </div>
</div>
@endsection