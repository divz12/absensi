<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
	public function index()
	{
		$kelas = Kelas::get();

		return view('kelas/index', ['kelas' => $kelas]);
	}

	public function tambah()
	{
		return view('kelas.form');
	}

	public function simpan(Request $request)
	{
		Kelas::create(['nama' => $request->nama]);

		return redirect()->route('kelas');
	}

	public function edit($id)
	{
		$kelas = Kelas::find($id)->first();

		return view('kelas.form', ['kelas' => $kelas]);
	}

	public function update($id, Request $request)
	{
		Kelas::find($id)->update(['nama' => $request->nama]);

		return redirect()->route('kelas');
	}

    	public function hapus($id)
	{
		Kelas::find($id)->delete();

		return redirect()->route('kelas');
	}
}
