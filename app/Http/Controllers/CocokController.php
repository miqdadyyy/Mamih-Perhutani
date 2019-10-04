<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CocokController extends Controller
{
    public function index()
    {
    	return view('form');
    }
    public function hitung(Request $req)
    {
    	$seratus = \App\Tanaman::select('nama_tanaman')
    		->where('keasaman','=',$req->keasaman)
    		->where('suhu','=',$req->suhu)
    		->where('kelembaban','=',$req->kelembaban)
    		->first();

//    	$riw = new 	\

    	return redirect()->back()->with('sukses','Sukses simpan ke DB');
    }
    public function lihatHasil()
    {
//    	$hasil = \App\
//    	return view()
    }
}
