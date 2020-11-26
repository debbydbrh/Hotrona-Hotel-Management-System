<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('cari')){
            $data_karyawan = \App\Karyawan::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
             $data_karyawan = \App\Karyawan::all();        
        }
      
    return view('karyawan.index',['data_karyawan' => $data_karyawan]);
     }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'email' => 'required|email|unique:users',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            

        ]);

        //Insert ke Tabel User
        $user = new \App\User;
        $user->role = 'resepsionis';
        $user->username = $request->nama;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = str_random(60);
        $user->save();


        //Insert ke Tabel Karyawan
        $request->request->add(['user_id' => $user->id ]);
        $karyawan = \App\Karyawan::create($request->all());
        return redirect('/karyawan')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        $karyawan = \App\Karyawan::find($id);
        return view('karyawan/edit',['karyawan' => $karyawan]);
    }

    public function update(Request $request, $id)
    {
        $karyawan = \App\Karyawan::find($id);
        $karyawan->update($request->all());
        return redirect('/karyawan')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $karyawan = \App\Karyawan::find($id);
        $karyawan->delete();
        return redirect('/karyawan')->with('sukses','Data berhasil dihapus');
    }
}
