<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        if(Auth::user()){
            return redirect('/home');
        }
    	return view('auth.login');
    }
    public function postlogin(Request $request)
    {
    	if (Auth::attempt($request->only('email','password'))) {
    		return redirect('/home');
    	}
    	return redirect('/login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function role()
    {
        $role = Auth()->user()->role;
        if (Auth()->user()->role == 'mandor') {
            return view('dashboard.mandor');
        }else if (Auth()->user()->role == 'bos') {
            return view('dashboard.bos');
        }
    }
}
