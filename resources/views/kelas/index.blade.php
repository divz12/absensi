@extends('layouts.app')

@section('title', 'Data Kelas')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Kelas</h6>
    </div>
    <div class="card-body">
      <a href="{{ route('kelas.tambah') }}" class="btn btn-primary mb-3">Tambah Kelas</a>
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kelas</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($kelas as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->nama }}</td>
                <td>
                  <a href="{{ route('kelas.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('kelas.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
