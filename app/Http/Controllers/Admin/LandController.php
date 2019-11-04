<?php

namespace App\Http\Controllers\Admin;

use App\Land;
use App\Plant;
use App\Texture;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('admin.land.index', compact('lands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.land.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $land = Land::findOrFail($id);
        $plant = $land->plant;
        $calculation_result = (object)$this->calculate_compability($plant, $land);
        $suggestion_result = [];
        foreach (Plant::all() as $p) {
            array_push($suggestion_result, $this->calculate_compability($p, $land));
        }
        $suggestion_result = collect($suggestion_result)->sortByDesc('result')->take(5);
//        return $suggestion_result;
        $graph_plant = [$plant->ph, $plant->temperature, $plant->humidity, $plant->oksygen];
        $graph_land = [$land->ph, $land->temperature, $land->humidity, $land->oksygen];

        $graph_suggest_name = $suggestion_result->pluck('plant.name');
        $graph_suggest_value =  $suggestion_result->map(function($q){
//            dd($q);
            return [
                'result' => $q['result'] * 100
            ];
        })->pluck('result');

        return view('admin.land.show', compact('land', 'calculation_result', 'suggestion_result', 'graph_plant', 'graph_land', 'graph_suggest_name', 'graph_suggest_value'));
    }

    private function calculate_compability($plant, $land)
    {
        $texture_index = abs($plant->texture - $land->texture) + 1;
        // TODO : Calculation Texture
        $texture_value = $this->calculate_texture($texture_index, 35);

        // TODO : Calculation PH
        $data_ph = [];
        $diff_ph = 0.5;
        for ($i = 1; $i <= 5; $i++) {
            if ($i == 1) {
                $temp = [$plant->ph - ($diff_ph * 3)];
                array_push($data_ph, $temp);
            } else if ($i == 5) {
                $temp = [$plant->ph + ($diff_ph * 3)];
                array_push($data_ph, $temp);
            } else {
                $temp_s = end($data_ph[$i - 2]) + 0.1;
                $temp_f = $temp_s + 0.9;
                array_push($data_ph, [$temp_s, $temp_f]);
            }
        }
        $ph_value = $this->calculate($land->ph, $data_ph, 10);

        // TODO : Calculation Temperature
        $data_temperature = [];
        for ($i = 0; $i < 5; $i++) {
            array_push($data_temperature , -1);
        }
        $data_temperature[2] = [$plant->temperature - 7.5, $plant->temperature + 7.5];
        $data_temperature[1] = [$data_temperature[2][0] - 15, $data_temperature[2][0]];
        $data_temperature[0] = [$data_temperature[1][0]];
        $data_temperature[3] = [$data_temperature[2][1], $data_temperature[2][1] + 15];
        $data_temperature[4] = [$data_temperature[3][1]];
        $temperature_value = $this->calculate($land->temperature, $data_temperature, 20);


        // TODO : Calculation Oksygen
        $data_oksygen = [];
        for ($i = 0; $i < 5; $i++) {
            array_push($data_oksygen, -1);
        }
        $data_oksygen[2] = [$plant->oksygen - 7.5, $plant->oksygen + 7.5];
        $data_oksygen[1] = [$data_oksygen[2][0] - 15, $data_oksygen[2][0]];
        $data_oksygen[0] = [$data_oksygen[1][0]];
        $data_oksygen[3] = [$data_oksygen[2][1], $data_oksygen[2][1] + 15];
        $data_oksygen[4] = [$data_oksygen[3][1]];
        $oksygen_value = $this->calculate($land->oksygen, $data_oksygen, 15);

        // TODO : Calculation Humidity
        $data_humidity = [];
        for ($i = 0; $i < 5; $i++) {
            array_push($data_humidity, -1);
        }
        $data_humidity[2] = [$plant->humidity - 5, $plant->humidity + 5];
        $data_humidity[1] = [$data_humidity[2][0] - 10, $data_humidity[2][0]];
        $data_humidity[0] = [$data_humidity[1][0]];
        $data_humidity[3] = [$data_humidity[2][1], $data_humidity[2][1] + 10];
        $data_humidity[4] = [$data_humidity[3][1]];
        $humidity_value = $this->calculate($land->humidity, $data_humidity, 20);

        $result = $texture_value + $ph_value + $temperature_value + $humidity_value + $oksygen_value;

        return [
            'plant' => $plant,
            'result' => $result,
            'status' => $result * 100 < 40 ? 'Tidak Cocok' : ($result * 100 < 70 ? 'Dipertimbangkan' : 'Cocok'),
            'value' => [
                'texture' => $texture_value,
                'ph' => $ph_value,
                'temperature' => $temperature_value,
                'humidity' => $humidity_value,
                'oksygen' => $oksygen_value
            ]
        ];
    }

    private function calculate($value, $data, $normalization)
    {
        $index_value = -1;
        $index_value = $value < $data[0][0] ? 0.33 : $index_value;
        $index_value = $data[1][0] <= $value && $value <= $data[1][1] ? 0.67 : $index_value;
        $index_value = $data[2][0] <= $value && $value <= $data[2][1] ? 1 : $index_value;
        $index_value = $data[3][0] <= $value && $value <= $data[3][1] ? 0.67 : $index_value;
        $index_value = $value > $data[4][0] ? 0.33 : $index_value;

        return $index_value * $normalization / 100;
    }

    private function calculate_texture($index, $normalization)
    {
        if ($index == 1) {
            $val = 1;
        } else if ($index == 2) {
            $val = 0.67;
        } else {
            $val = 0.33;
        }
        return $val * $normalization / 100;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Land::findOrFail($id)->delete();
        toastr()->success("Data Berhasil Dihapus");
        return redirect()->back();
    }
}
