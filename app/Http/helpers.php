<?php
if (!function_exists('json_response')) {
    function json_response($success = 1, $message, $data = null)
    {
        return response()->json([
            'success' => $success,
            'message' => $message,
            'data' => $data
        ], 200);
    }
}

if (!function_exists('json_response_error')) {
    function json_response_error($message, $errors = null, $code = 422)
    {
        return response()->json([
            'success' => 0,
            'message' => $message,
            'errors' => $errors,
        ], $code);
    }
}

if (!function_exists('get_radius_lat_lng')) {
    function get_radius_lat_lng($lat, $lng)
    {
        $lat_d = 0.00107;
        $lng_d = 0.0042917;
        $r_lat = [$lat - $lat_d, $lat + $lat_d];
        $r_lng = [$lng - $lng_d, $lng + $lng_d];
        sort($r_lat);
        sort($r_lng);
        return [$r_lat, $r_lng];
    }
}