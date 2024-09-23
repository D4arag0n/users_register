<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afiliado;

class AfiliadoController extends Controller
{
    //
    public function index(){
        return view('inicio');
    }
    
    public function store(Request $request){
        $this->validate($request, [
            'curp' => 'required',
            'password' => 'required'
        ]);

        $afiliado = Afiliado::where('numeroAfiliacion', $request->password)
        ->where('curp', $request->curp)
        ->first();

        if(!$afiliado){
            return back()->with('mensaje', 'CURP o Contraseña Incorrectos');
        }

        //dd($afiliado);
        return redirect()->route('sustentante.registrarse', ['afiliado' => $afiliado]);
    }
}
