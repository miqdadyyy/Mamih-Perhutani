<?php

namespace App\Http\Controllers\Api;

use App\Land;
use App\Plant;
use App\Texture;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MandorController extends Controller
{
    public function getPlants(){
        $plants = Plant::all();
        return json_response(1, "Success", $plants);
    }

    public function getMyLands(Request $request){
        $user = User::auth($request);
        $lands = Land::where('user_id', $user->id)->get();
        return json_response(1, "Success", $lands);
    }

    public function addLand(Request $request){
        $user = User::auth($request);

        Land::create([
            'plant_id' => $request->plant_id,
            'user_id' => $user->id,
            'ph' => $request->ph,
            'temperature' => $request->temperature,
            'humidity' => $request->humidity,
            'oksygen' => $request->oksygen,
            'texture' => $request->texture
        ]);

        return json_response(1, "Data berhasil ditambahkan");

//        DB::beginTransaction();
//        try{
//            $request->request->set('plant_id', $request->plant);
//            $request->request->set('user_id', Auth::id());
//            Land::create($request->all());
//            DB::commit();
//            toastr()->success('Data Berhasil Ditambahkan');
//            return redirect()->route('mandor.land.index');
//        } catch (Exception $e){
//            DB::rollBack();
//            toastr()->error($e);
//            return redirect()->back();
//        }
    }

    public function getTexture(){
        $textures = Texture::get();
        return json_response(1, "Success", $textures);
    }
}
