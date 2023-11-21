<?php

namespace App\Http\Controllers;

use App\Models\LegendStore;
use Illuminate\Http\Request;

class LegendStoreController extends Controller
{
    public function index()
    {
        return view("legendstore.all",
        [   
            "title" => "Legend Store",
            "cars" => LegendStore::all(),
        ]);
    }

    public function show($id)
    {
        return view("legendstore.detail",[
            "title" => "Detail Car",
            "car" => LegendStore::find($id) //* Route model binding,
        ]);
    }
}
