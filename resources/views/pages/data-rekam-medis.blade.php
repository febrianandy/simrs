@extends('layouts.index')

@section('content')
<!-- Page Heading -->
<div class="heading d-flex justify-content-between">
  <div>
    <h1 class="h3 mb-2 text-gray-800">Table Pasien</h1>
    <p class="mb-4">Berikut adalah daftar data pasien</p>
  </div>
  <div>
    <a href="" class="btn btn-success mb-3"> <i class="fas fa-plus-circle"></i> Tambah Pasien</a>
  </div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 table-data-pasien">
    <h6 class="m-0 font-weight-bold ">Data Pasien</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID Rekam Medis</th>
            <th>Pasien</th>
            <th>Keluhan</th>
            <th>Diagnosa</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          {{-- @foreach ($pasiens as $pasien )
          <tr>
            <td>{{ $pasien->nama }}</td>
            <td>{{ $pasien->jenis_kelamin }}</td>
            <td>{{ $pasien->no_telp }}</td>
            <td>{{ $pasien->email }}</td>
            <td>{{ $pasien->alamat }}</td>
            <td>
              <a href="" class="btn btn-warning">Edit</a>
              <a href="" class="btn btn-danger">Delete</a>
            </td>
          </tr>
          @endforeach --}}
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection