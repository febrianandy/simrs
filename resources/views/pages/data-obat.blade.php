@extends('layouts.index')

@section('content')
<!-- Page Heading -->
<div class="heading d-flex justify-content-between">
  <div>
    <h1 class="h3 mb-2 text-gray-800">Table obat</h1>
    <p class="mb-4">Berikut adalah daftar data obat</p>
  </div>
  <div>
    <a href="/tambah-data-obats" class="btn btn-success mb-3"> <i class="fas fa-plus-circle"></i> Tambah Data Obat</a>
  </div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 table-data-pasien">
    <h6 class="m-0 font-weight-bold ">Data Obat</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Name</th>
            <th>Jenis Obat</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($obats as $obat )
          <tr>
            <td>{{ $obat->nama_obat }}</td>
            <td>{{ $obat->jenis_obat }}</td>
            <td>{{ $obat->harga }}</td>
            <td>{{ $obat->stok }}</td>
            <td>
              <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
              <a href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection