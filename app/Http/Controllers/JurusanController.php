<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;

class JurusanController extends Controller
{
	public function index()
	{
		$jurusan = Jurusan::get();

		return view('jurusan/index', ['jurusan' => $jurusan]);
	}

	public function tambah()
	{
		return view('jurusan.form');
	}

	public function simpan(Request $request)
	{
		Jurusan::create(['nama' => $request->nama]);

		return redirect()->route('jurusan');
	}

	public function edit($id)
	{
		$jurusan = Jurusan::find($id)->first();

		return view('jurusan.form', ['jurusan' => $jurusan]);
	}

	public function update($id, Request $request)
	{
		Jurusan::find($id)->update(['nama' => $request->nama]);

		return redirect()->route('jurusan');
	}

    	public function hapus($id)
	{
		Jurusan::find($id)->delete();

		return redirect()->route('jurusan');
	}
}
