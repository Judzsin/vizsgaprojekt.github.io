<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KartyaController;

    

Auth::routes();


Route::get('/', [KartyaController::class,'index'] );

Route::get('/home', function() {
    return view('home');
});
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

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function(){
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});











