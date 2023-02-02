@extends('layouts.index')

@section('content')
<!-- Page Heading -->
<div class="heading d-flex justify-content-between">
  <div>
    <h1 class="h3 mb-2 text-gray-800">Table Dokter</h1>
    <p class="mb-4">Berikut adalah daftar data dokter</p>
  </div>
  <div>
    <a href="/tambah-dokter" class=" btn btn-success mb-3"> <i class="fas fa-plus-circle"></i> Tambah Dokter</a>
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
            <th>No</th>
            <th>Nip</th>
            <th>Nama</th>
            <th>No Telpun</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dokters as $dokter )
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $dokter->nip }}</td>
            <td>{{ $dokter->nama }}</td>
            <td>{{ $dokter->no_telp }}</td>
            <td>
              <a href="" class="btn btn-warning"><i class="fas fa-edit"></i></a>
              <a href="" class="btn btn-primary"><i class="fas fa-search-plus"></i></a>
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