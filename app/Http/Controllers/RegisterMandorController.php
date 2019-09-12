<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterMandorController extends Controller
{
    public function index()
    {
    	return view('public.daftar');
    }
    public function insert(Request $request)
    {
    	$pendaftaran = new \App\Registrant;
    	$pendaftaran->id = mt_rand(10000,19999);
    	$pendaftaran->status = 'belum diterima';
    	$pendaftaran->nama_lengkap = $request->nama_lengkap;
    	$pendaftaran->email = $request->email;
    	$pendaftaran->nohp = $request->nohp;
    	$pendaftaran->alamat = $request->alamat;
        $pendaftaran->password = $request->password;

    	$pendaftaran->save();

    	return redirect()->back()->with('sukses','Berhasil melakukan pendaftan');	
    }
}
