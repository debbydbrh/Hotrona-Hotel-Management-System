<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index(Request $request)
    {

        if($request->has('cari')){
            $data_item = \App\Item::where('nama_barang','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_item = \App\Item::all();        
        }
      
        return view('item.index',['data_item' => $data_item]);
    }

    public function create(Request $request)
    {
        \App\Item::create($request->all());
        return redirect('/item')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        $item = \App\Item::find($id);
        return view('item/edit',['item' => $item]);
    }

    public function update(Request $request, $id)
    {
        $item = \App\Item::find($id);
        $item->update($request->all());
        return redirect('/item')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $item = \App\Item::find($id);
        $item->delete();
        return redirect('/item')->with('sukses','Data berhasil dihapus');
    }


}
