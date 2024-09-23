<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return view('login.index');
    }

    public function store(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]); 

        if(!auth()->attempt($request->only('email', 'password'))){
            return back()->with('mensaje', 'Usuario o contraseña incorrectos');
        }

        $request->session()->regenerate();
        return redirect()->route('sesion.iniciar');
    }
}
