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
            ->addColumn('texture_', function($q){
                return $q->texture_->particle;
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
                return '<button class="btn btn-danger" onclick="deleteData(\''. $q->id .'\')">Delete</button>' .
                    '<button class="btn btn-primary" onclick="document.location = \'land/'. $q->id .'\'">Detail</button>';
            })
            ->addColumn('date', function($q){
                return date('d/M/Y', strtotime($q->created_at));
            })
            ->addColumn('mandor', function($q){
                return $q->user->name;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
}
