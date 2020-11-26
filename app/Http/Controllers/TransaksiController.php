<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;
use App\Room;
use PDF;

class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        $room=Room::paginate(10);

        if($request->has('cari')){
            $data_transaksi = \App\Transaksi::where('nama_pemesan','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_transaksi = \App\Transaksi::all();      
        }
     
        return view('transaksi.index', compact('data_transaksi','room'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nik_pemesan' => 'required|min:16',
            'nama_pemesan' => 'required',
            'alamat' => 'required',
            'jumlah_kamar' => 'required|numeric',
            'harga_kamar' => 'required'
            

        ]);


        \App\Transaksi::create($request->all());
        return redirect('/transaksi')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        $transaksi = \App\Transaksi::find($id);
        return view('transaksi/edit',['transaksi' => $transaksi]);
    }

    public function update(Request $request, $id)
    {
        $transaksi = \App\Transaksi::find($id);
        $transaksi->update($request->all());
        return redirect('/transaksi')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $transaksi = \App\Transaksi::find($id);
        $transaksi->delete();
        return redirect('/transaksi')->with('sukses','Data berhasil dihapus');
    }

    public function exportPdf()
    {
        $transaksi = \App\Transaksi::all();
        $pdf = PDF::loadView('export.transaksipdf',['transaksi' => $transaksi]);     
        return $pdf->download('report.pdf');
    }
}
