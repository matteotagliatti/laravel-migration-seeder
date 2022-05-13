<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where([
            ["giorno_partenza", '=', date('Y-m-d')],
            ["cancellato", "=", 0]
        ])->get();
        $data = ["trains" => $trains];
        return view('trains', $data);
    }
}
