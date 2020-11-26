<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $data_pengumuman = \App\Pengumuman::all();
        return view('pengumuman.index',['data_pengumuman' => $data_pengumuman]);
    }


    public function create(Request $request)
    {
        \App\Pengumuman::create($request->all());
        return redirect('/pengumuman')->with('sukses','Data berhasil diinput');
    }


    public function edit($id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        return view('pengumuman/edit',['pengumuman' => $pengumuman]);
    }

    public function update(Request $request, $id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        $pengumuman->update($request->all());
        return redirect('/pengumuman')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $pengumuman = \App\Pengumuman::find($id);
        $pengumuman->delete();
        return redirect('/pengumuman')->with('sukses','Data berhasil dihapus');
    }
}
