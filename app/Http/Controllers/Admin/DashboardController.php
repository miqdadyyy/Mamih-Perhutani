<?php

namespace App\Http\Controllers\Admin;

use App\Land;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $lands = Land::where('created_at', '>=', Carbon::now()->subWeek())->get()->take(6);

        $lands_ = Land::where('created_at', '>=', Carbon::now()->subWeek())
            ->get()
            ->groupBy(function ($q) {
                return Carbon::parse($q->created_at)->format('l');
            });

        $days = [
            'Sunday' => [
                'day' => 'Minggu',
                'val' => 0
            ],
            'Monday' => [
                'day' => 'Senin',
                'val' => 0
            ],
            'Tuesday' => [
                'day' => 'Selasa',
                'val' => 0
            ],
            'Wednesday' => [
                'day' => 'Rabu',
                'val' => 0
            ],
            'Thursday' => [
                'day' => 'Kamis',
                'val' => 0
            ],
            'Friday' => [
                'day' => 'Jumat',
                'val' => 0
            ],
            'Saturday' => [
                'day' => 'Sabtu',
                'val' => 0
            ]
        ];
        $d_ = Carbon::now()->addDay()->format('l');
        $shifted = false;
        foreach ($lands_ as $day => $land) {
            $days[$day]['val'] = $land->count();
        }

        foreach ($days as $day => $data){
            if($d_ !== $day && !$shifted){
                $temp = array_shift($days);
                array_push($days, $temp);
            }
            if($d_ == $day){
                $shifted = true;
            }
        }
        $days_fix = array_column($days, 'day');
        $val_fix = array_column($days, 'val');
//        return $lands;
//        return json_encode($days);
        return view('admin.dashboard', compact('lands', 'days_fix', 'val_fix'));
    }
}
