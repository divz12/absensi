@extends('layouts.app')

@section('title', 'Form Jurusan')

@section('contents')
  <form action="{{ isset($jurusan) ? route('jurusan.tambah.update', $jurusan->id) : route('jurusan.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($jurusan) ? 'Form Edit Jurusan' : 'Form Tambah Jurusan' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama">Nama Jurusan</label>
              <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($jurusan) ? $jurusan->nama : '' }}">
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection
