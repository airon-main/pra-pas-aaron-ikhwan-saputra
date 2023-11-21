<?php

namespace App\Http\Controllers;

use App\Models\BClassCars;
use Illuminate\Http\Request;

class BClassCarsController extends Controller
{
    public function index()
    {
        return view("bclass.all",
        [   
            "title" => "B Class",
            "cars" => BClassCars::all(),
        ]);
    }

    public function show($id)
    {
        return view("bclass.detail",[
            "title" => "Detail Car",
            "car" => BClassCars::find($id) //* Route model binding,
        ]);
    }
}
