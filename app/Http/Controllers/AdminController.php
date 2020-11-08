<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index () 
    {
    	return view('admin.Index');
    }

    public function mahasiswa () 
    {
    	return view('admin.DataMhs');
    }

    public function dosen () 
    {
    	return view('admin.DataDosen');
    }

    public function kaprodi () 
    {
    	return view('admin.DataKaprodi');
    }

    public function admin () 
    {
    	return view('admin.DataAdmin');
    }

    public function jadwal () 
    {
    	return view('admin.Jadwal');
    }
 
    public function user () 
    {
    	return view('admin.DataUser');
    }


}
