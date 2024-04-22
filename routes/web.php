<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KartyaController;



Route::get('/', [KartyaController::class,'index'] );
    

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/kartya',[KartyaController::class,'index']);
    



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












