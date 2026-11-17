<?php

namespace App\Http\Controllers;

use App\Models\table_pasiens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControllerPasien extends Controller
{
    public function Masuk(){
        return view('login');
    }
    public function daptar(){
        return view('register');
    }
    public function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $ambildata=$request->only('email','password');

        if(Auth::attempt($ambildata)){
            table_pasiens::find($ambildata);
        }else
        {
            redirect('')->with('pesan','login gagal');
        }
    }
    public function baru(Request $request){
        table_pasiens::created($request->all());
    }
}
