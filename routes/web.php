<?php

use App\Http\Controllers\CClassController;
use App\Http\Controllers\DClassController;
use App\Http\Controllers\BClassCarsController;
use App\Http\Controllers\LegendStoreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return "Hello World";
});

Route::get('/home', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/dclass/all', [DClassController::class, 'index']);
Route::get('/dclass/detail/{car}', [DClassController::class, 'show']);

Route::get('/cclass/all', [CClassController::class, 'index']);
Route::get('/cclass/detail/{car}', [CClassController::class, 'show']);

Route::get('/bclass/all', [BClassCarsController::class, 'index']);
Route::get('/bclass/detail/{car}', [BClassCarsController::class, 'show']);

Route::get('/legendstore/all', [LegendStoreController::class, 'index']);
Route::get('/legendstore/detail/{car}', [LegendStoreController::class, 'show']);