<?php

namespace App\Http\Controllers\Mandor;

use App\Land;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class AjaxController extends Controller
{
    public function getLands(){
        $lands = Auth::user()->lands;
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
