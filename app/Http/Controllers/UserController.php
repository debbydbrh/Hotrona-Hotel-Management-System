<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index(Request $request)
     {

         if($request->has('cari')){
             $data_user = \App\User::where('username','LIKE','%'.$request->cari.'%')->get();
         }else{
             $data_user = \App\User::all();        
         }
      
        return view('user.index',['data_user' => $data_user]);
     }

    public function create(Request $request)
    {
        $user = \App\User::create($request->all());
        
        $user->password = 'rahasia';
        return redirect('/user')->with('sukses','Data berhasil diinput');
    }

    public function edit($id)
    {
        $user = \App\User::find($id);
        return view('user/edit',['users' => $users]);
    }

    public function update(Request $request, $id)
    {
        $user = \App\User::find($id);
        $user->update($request->all());
        return redirect('/user')->with('sukses','Data berhasil diupdate');
    }

    public function delete($id)
    {
        $user = \App\User::find($id);
        $user->delete();
        return redirect('/user')->with('sukses','Data berhasil dihapus');
    }
}
