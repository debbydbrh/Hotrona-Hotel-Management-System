<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class DashboardController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::paginate(10);
        return view('dashboards.index',compact('pengumuman'));
    }

   
  
}
