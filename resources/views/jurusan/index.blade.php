@extends('layouts.app')

@section('title', 'Data Jurusan')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Jurusan</h6>
    </div>
    <div class="card-body">
      <a href="{{ route('jurusan.tambah') }}" class="btn btn-primary mb-3">Tambah Jurusan</a>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Jurusan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($jurusan as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->nama }}</td>
                <td>
                  <a href="{{ route('jurusan.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('jurusan.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
