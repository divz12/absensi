@extends('layouts.app')

@section('title', 'Data Siswa')

@section('contents')
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Siswa</h6>
    </div>
    <div class="card-body">
			@if (auth()->user()->level == 'Admin')
      <a href="{{ route('siswa.tambah') }}" class="btn btn-primary mb-3">Tambah Data</a>
			@endif
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>No</th>
              <th>NISN</th>
              <th>Nama Siswa</th>
              <th>Nama Kelas</th>
							@if (auth()->user()->level == 'Admin')
              <th>Aksi</th>
							@endif
            </tr>
          </thead>
          <tbody>
            @php($no = 1)
            @foreach ($data as $row)
              <tr>
                <th>{{ $no++ }}</th>
                <td>{{ $row->nisn }}</td>
                <td>{{ $row->nama_siswa }}</td>
                <td>{{ $row->kelas->nama }}</td>
                <td>{{ $row->jurusan->nama }}</td>
								@if (auth()->user()->level == 'Admin')
                <td>
                  <a href="{{ route('siswa.edit', $row->id) }}" class="btn btn-warning">Edit</a>
                  <a href="{{ route('siswa.hapus', $row->id) }}" class="btn btn-danger">Hapus</a>
                </td>
								@endif
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
