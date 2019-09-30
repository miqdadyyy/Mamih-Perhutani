<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterMandorController extends Controller
{
    public function index()
    {
    	return view('public.daftar');
    }
    public function inserta(Request $request)
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
    public function insert(Request $request)
    {
        $user = new \App\User;
        $user->role = 'mandor';
        $user->id = mt_rand(10000,19999);
        $mhs = \App\Mandor::create([
            'id' => mt_rand(10000,19999),
            'user_id' => $user->id,
            'username' => $request->username,
            'nama_lengkap' => $request->nama_depan.' '.$request->nama_belakang,
            'nohp' => $request->nohp,
            'alamat' => $request->alamat
        ]);
        $user->name = $request->nama_depan.$request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect('/login');
    }
}
