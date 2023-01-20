<?php

namespace App\Http\Controllers;

use App\Models\Usuario as UsuarioModel;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Hash;

class Usuario extends Controller
{
    public function cadastrar(){
        // dd(Hash::make('123'), md5('123'), sha1('123'));
        
        return view('usuario.cadastro');
    }

    public function salvar(Request $request){
        $request->validate([
            "nome" => "required",
            "email" => "required|email",
            "senha" => "min:5"
        ]);

        if(UsuarioModel::cadastrar($request)){
            return view('usuario.sucesso', [
                "fulano" => $request->input('nome')
            ]);
        }else{
            echo "Ops! Falhou ao cadastrar!";
        }
        
        // dd($request->all());
    }
}
