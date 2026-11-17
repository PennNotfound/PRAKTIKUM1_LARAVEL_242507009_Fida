<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerPasien;
use Illuminate\Auth\Events\login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',[ControllerPasien::class,'masuk']);
Route::post('/login',[ControllerPasien::class,'login']);

Route::get('/register',[ControllerPasien::class,'daptar']);
Route::post('/register',[ControllerPasien::class,'registrasi']); 