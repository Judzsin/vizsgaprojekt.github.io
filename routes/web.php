<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KartyaController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\homeController;

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
Route::get('/home', function(){
    Route::get('/', [homeController::class,'index'] );
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});











