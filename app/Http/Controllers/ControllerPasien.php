<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerPasien extends Controller
{
    public function Masuk(){
        return view('login');
    }
    public function daptar(){
        return view('register');
    }
}
