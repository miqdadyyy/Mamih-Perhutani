<?php

namespace App\Http\Controllers;
use App\Mandor;
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

    public function updateMandor(Request $request){
        Mandor::where('user_id', Auth::id())->first()->update($request->all());

        return redirect()->back();
    }

    public function updatePassword(Request $request){
        if($request->password_ != $request->password){
            return redirect()->back();
        }
        Auth::user()->update([
            'password' => bcrypt($request->password)
        ]);

        return redirect()->back();
    }
}
