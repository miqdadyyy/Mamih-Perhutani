<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();
        if(is_null($user)){
            return json_response_error("User tidak ditemukan", [], 404);
        }
        if(Hash::check($request->password, $user->password)){
            $token = Str::random(8);
            $user->update([
                'token' => $token,
            ]);

            $user = User::where('email', $request->email)->first();
            return json_response(1, "Login Berhasil", $user);
        } else {
            return json_response(0, "Password Salah");
        }
    }
}
