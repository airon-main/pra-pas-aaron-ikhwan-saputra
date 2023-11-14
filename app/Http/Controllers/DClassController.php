<?php

namespace App\Http\Controllers;

use App\Models\DClassCars;
use Illuminate\Http\Request;

class DClassController extends Controller
{
    public function index()
    {
        return view("dclass.all",
        [   
            "title" => "D Class",
            "cars" => DClassCars::all(),
        ]);
    }

    public function show($id)
    {
        return view("dclass.detail",[
            "title" => "Detail Student",
            "car" => DClassCars::find($id) //* Route model binding,
        ]);
    }
}
