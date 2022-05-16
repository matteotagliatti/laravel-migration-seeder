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
        $data = ["trains" => $trains, "title" => "Treni che partono oggi"];
        return view('trains', $data);
    }

    public function all()
    {
        $trains = Train::orderBy("giorno_partenza", "desc")->paginate(10);;
        $data = ["trains" => $trains, "title" => "Tutti i treni"];
        return view('trains', $data);
    }
}
