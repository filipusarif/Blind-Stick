<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataIot extends Controller
{
    public function index(Request $request)
    {
        \Illuminate\Support\Facades\Storage::append("arduino-log.txt",
            "Time: " . now()->format("Y-m-d H:i:s") . ', ' .
            "Object: " . $request->get("object", "n/a") . '°C, ' .
            "SOS: " . $request->get("sos", "n/a") . '%'
        );
        $data = $request->all();
        // "Time: " . now()->format("Y-m-d H:i:s") . ', ' .
        // "Object: " . $request->get("object", "n/a") . '°C, ' .
        // "SOS: " . $request->get("sos", "n/a") . '%'
        // Process the received data
        // $data = [
        //     'time' => $data[0],
        //     'object' =>  $data[0],
        //     'sos' =>  $data[0],
        // ];
        return view('api', [
            'object' =>  "hello",
            // 'time' => now()->format("Y-m-d H:i:s"),
            // 'object' => $request->get("object", "n/a") . '°C',
            // 'sos' => $request->get("sos", "n/a") . '%',
        ]);
        // return view('api', $data);
        // return response()->json(['status' => 'success']);
    }
}
