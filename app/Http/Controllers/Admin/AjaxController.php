<?php

namespace App\Http\Controllers\Admin;

use App\Land;
use App\Plant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class AjaxController extends Controller
{
    public function getPlants(){
        $plants = Plant::get();
        foreach ($plants as $index => $plant){
            $plant->no = $index+1;
        }
        return DataTables::of($plants)
            ->addColumn('action', function($q){
                return '<button class="btn btn-danger" onclick="deleteData(\''. $q->id .'\')">Delete</button>';
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function getLands(){
        $lands = Land::get();
        foreach ($lands as $index => $land){
            $land->no = $index+1;
        }
        return DataTables::of($lands)
            ->addColumn('action', function($q){
                return '<button class="btn btn-danger" onclick="deleteData(\''. $q->id .'\')">Delete</button>';
            })
            ->addColumn('date', function($q){
                return date('d/M/Y', strtotime($q->created_at));
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
