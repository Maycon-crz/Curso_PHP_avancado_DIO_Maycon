<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario as UsuarioModel;

class Usuario extends Controller{
    public function salvar(Request $request){
        if(UsuarioModel::cadastrar($request)){
            return response("ok", 201);
        }else{
            return response("ok", 409);
        }
    }
    public function editar(Request $request){
        //Exercício: Implementar edição
        
        // if(UsuarioModel::cadastrar($request)){
        //     return response("ok", 201);
        // }else{
        //     return response("ok", 409);
        // }
    }
}
