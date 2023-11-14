<?php

use App\Http\Controllers\CClassController;
use App\Http\Controllers\DClassController;
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

Route::get('/cclass/all', [CClassController::class, 'index']);
Route::get('/cclass/detail/{car}', [CClassController::class, 'show']);

Route::get('/dclass/all', [DClassController::class, 'index']);
Route::get('/dclass/detail/{car}', [DClassController::class, 'show']);