<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
	public function index(Request $request)
	{
		if($request->has('cari')){
			$data_siswa = \App\Models\Siswa::where('nama_depan', 'LIKE', '%'.$request->cari.'%')->get();
		} else {
			$data_siswa = \App\Models\Siswa::all();
		}		
		return view('siswa.index',['data_siswa' => $data_siswa]);
	}

	public function create(Request $request)
	{
		\App\Models\Siswa::create($request->all());
		return redirect('/siswa')->with('sukses', 'Data berhasil ditambahkan');
	}

	public function edit($id)
	{
		$siswa = \App\Models\Siswa::find($id);
		return view('siswa/edit', ['siswa' => $siswa]);
	}

	public function update(Request $request, $id)
	{
		$siswa = \App\Models\Siswa::find($id);
		$siswa->update($request->all());
		return redirect('/siswa')->with('sukses', 'Data berhasil diupdate');
	}

	public function delete($id)
	{
		$siswa = \App\Models\Siswa::find($id);
		$siswa->delete();
		return redirect('/siswa')->with('sukses', 'Data berhasil dihapus');
	}

	public function profile($id)
	{
		$siswa = \App\Models\Siswa::find($id);
		return view('siswa.profile', ['siswa' => $siswa]);
	}
}