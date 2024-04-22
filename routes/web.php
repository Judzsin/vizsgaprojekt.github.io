<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KartyaController;

    

Auth::routes();


Route::get('/', [KartyaController::class,'index'] );


Route::get('/szabalyzat', function () {
    return view('szabalyzat');
});

Route::get('/omen', function () {
    return view('omen');
});

Route::get('/elerhetosegek', function () {
    return view('elerhetosegek');
});
Route::get('/rolunk', function () {
    return view('rolunk');
});












