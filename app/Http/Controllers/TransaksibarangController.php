<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksibarang;
use App\Item;
use PDF;


class TransaksibarangController extends Controller
{
    public function index()
    {
        $data_transaksibarang = \App\Transaksibarang::all();
        return view('transaksibarang.index',['data_transaksibarang' => $data_transaksibarang]);
    }

    public function create(Request $request)
    {

        $this->validate($request, [

            'stok_barang' => 'required|numeric',
         
            

        ]);

        \App\Transaksibarang::create($request->all());
        return redirect('/transaksibarang')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        $transaksibarang = \App\Transaksibarang::find($id);
        return view('transaksibarang/edit',['transaksibarang' => $transaksibarang]);
    }

    public function update(Request $request, $id)
    {
        $transaksibarang = \App\Transaksibarang::find($id);
        $transaksibarang->update($request->all());
        return redirect('/transaksibarang')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $transaksibarang = \App\Transaksibarang::find($id);
        $transaksibarang->delete();
        return redirect('/transaksibarang')->with('sukses','Data berhasil dihapus');
    }

    public function exportPdf()
    {
        $transaksibarang = \App\Transaksibarang::all();
        $pdf = PDF::loadView('export.transaksibarangpdf',['transaksibarang' => $transaksibarang]);     
        return $pdf->download('report.pdf');
    }
}
