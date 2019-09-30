<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function indexMandor()
    {
    	$profileid = auth()->user()->id;
    	$akun = \App\Mandor::where('user_id','=',$profileid)->first();
    	$profile = auth()->user();
    	return view('profile.mandor',['profileid' => $profileid,'profile'=>$profile,'akun' => $akun]);
    }
    public function indexBos()
    {
    	$profileid = auth()->user()->id;
    	$akun = \App\Mahasiswa::where('user_id','=',$profileid)->first();
    	$profile = auth()->user();
    	return view('profile.mahasiswa',['profileid' => $profileid,'profile'=>$profile,'akun' => $akun]);
    }
}
