<?php

namespace App\Http\Controllers;

use App\Models\CClassCars;
use Illuminate\Http\Request;

class CClassController extends Controller
{
    public function index()
    {
        return view("cclass.all",
        [   
            "title" => "C Class",
            "cars" => CClassCars::all(),
        ]);
    }

    public function show($id)
    {
        return view("cclass.detail",[
            "title" => "Detail Student",
            "car" => CClassCars::find($id) //* Route model binding,
        ]);
    }
}
