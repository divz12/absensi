@extends('layouts.app')

@section('title', 'Form Siswa')

@section('contents')
  <form action="{{ isset($siswa) ? route('siswa.tambah.update', $siswa->id) : route('siswa.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($siswa) ? 'Form Edit Siswa' : 'Form Tambah Siswa' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nisn">NISN</label>
              <input type="text" class="form-control" id="nisn" name="nisn" value="{{ isset($siswa) ? $siswa->nisn : '' }}">
            </div>
            <div class="form-group">
              <label for="nama_siswa">Nama Siswa</label>
              <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ isset($siswa) ? $siswa->nama_siswa : '' }}">
            </div>
            <div class="form-group">
              <label for="id_kelas">Kelas</label>
							<select name="id_kelas" id="id_kelas" class="custom-select">
								<option value="" selected disabled hidden>-- Pilih Kelas --</option>
								@foreach ($kelas as $row)
									<option value="{{ $row->id }}" {{ isset($siswa) ? ($siswa->id_kelas == $row->id ? 'selected' : '') : '' }}>{{ $row->nama }}</option>
								@endforeach
							</select>
            </div>
            <div class="form-group">
              <label for="id_jurusan">Jurusan</label>
							<select name="id_jurusan" id="id_jurusan" class="custom-select">
								<option value="" selected disabled hidden>-- Pilih Jurusan --</option>
								@foreach ($jurusan as $row)
									<option value="{{ $row->id }}" {{ isset($siswa) ? ($siswa->id_jurusan == $row->id ? 'selected' : '') : '' }}>{{ $row->nama }}</option>
								@endforeach
							</select>
            </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
