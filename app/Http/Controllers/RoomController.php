<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_room = \App\Room::where('nama_kamar','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_room = \App\Room::all();  
        }
        
        
        
      
        return view('room.index',['data_room' => $data_room]);
    }

    public function create(Request $request)
    {
        \App\Room::create($request->all());
        return redirect('/room')->with('sukses','Data berhasil diinput');
    }


    public function edit($id)
    {
        $room = \App\Room::find($id);
        return view('room/edit',['room' => $room]);
    }

    public function update(Request $request, $id)
    {
        $room = \App\Room::find($id);
        $room->update($request->all());
        return redirect('/room')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $room = \App\Room::find($id);
        $room->delete();
        return redirect('/room')->with('sukses','Data berhasil dihapus');
    }
}
