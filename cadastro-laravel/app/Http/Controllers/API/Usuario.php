<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use APP\Models\Usuario as UsuarioModel;

class Usuario extends Controller
{
    public function salvar(Request $request){
        if(UsuarioModel::cadastrar($request)){
            return response("ok", 201);
        }else{
            return response("ok", 409);
        }
    }
}
