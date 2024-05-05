@extends('layouts.app')

@section('title', 'Form Kelas')

@section('contents')
  <form action="{{ isset($kelas) ? route('kelas.tambah.update', $kelas->id) : route('kelas.tambah.simpan') }}" method="post">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ isset($kelas) ? 'Form Edit Kelas' : 'Form Tambah Kelas' }}</h6>
          </div>
          <div class="card-body">
            <div class="form-group">
              <label for="nama">Nama Kelas</label>
              <input type="text" class="form-control" id="nama" name="nama" value="{{ isset($kelas) ? $kelas->nama : '' }}">
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
