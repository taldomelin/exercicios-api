<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExercicioQuatrooController extends Controller
{
    public function verificarNumero(Request $request){
        if($request->numero %2 == 0){
            return json_encode([
                'mensagem' => 'Par'
            ]);
            
    } else{
        return json_encode([
            'mensagem' => "ímpar"
        ]);
    }
}
}