<?php

namespace App\Http\Controllers\Mandor;

use App\Land;
use App\Plant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Exceptions\Exception;

class LandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lands = Land::get();
        return view('mandor.land.index', compact('lands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $plants = Plant::get();
        return view('mandor.land.create', compact('plants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'ph' => 'required',
            'temperature' => 'required',
            'humidity' => 'required',
            'oksygen' => 'required',
            'texture' => 'required',
            'plant' => 'required',
            'blok' => 'required'
        ]);

        DB::beginTransaction();
        try{
            $request->request->set('plant_id', $request->plant);
            $request->request->set('user_id', Auth::id());
            Land::create($request->all());
            DB::commit();
            toastr()->success('Data Berhasil Ditambahkan');
            return redirect()->route('mandor.land.index');
        } catch (Exception $e){
            DB::rollBack();
            toastr()->error($e);
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
