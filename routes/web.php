<?php

use App\Http\Controllers\ControllerPasien;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[ControllerPasien::class,'tampil']);
Route::post('/login',[ControllerPasien::class]);
Route::get('/register',[ControllerPasien::class,'daftar']);