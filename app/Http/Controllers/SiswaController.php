<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
	public function index()
	{
		$siswa = Siswa::get();

		return view('siswa.index', ['data' => $siswa]);
	}

	public function tambah()
	{
		$kelas = Kelas::get();
        $jurusan = Jurusan::get();

		return view('siswa.form', ['kelas' => $kelas, 'jurusan' => $jurusan]);
	}

	public function simpan(Request $request)
	{
		$data = [
			'nisn' => $request->nisn,
			'nama_siswa' => $request->nama_siswa,
			'id_kelas' => $request->id_kelas,
			'id_jurusan' => $request->id_jurusan,
		];

		Siswa::create($data);

		return redirect()->route('siswa');
	}

	public function edit($id)
	{
		$siswa = Siswa::find($id)->first();
		$kelas = Kelas::get();
        $jurusan = Jurusan::get();

		return view('siswa.form', ['siswa' => $siswa, 'kelas' => $kelas, 'jurusan' => $jurusan]);
	}

	public function update($id, Request $request)
	{
		$data = [
			'nisn' => $request->nisn,
			'nama_siswa' => $request->nama_siswa,
			'id_kelas' => $request->id_kelas,
			'id_jurusan' => $request->id_jurusan,
		];

		Siswa::find($id)->update($data);

		return redirect()->route('siswa');
	}

	public function hapus($id)
	{
		Siswa::find($id)->delete();

		return redirect()->route('siswa');
	}
}
