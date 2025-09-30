<?php

namespace App\Http\Controllers;

CRUD-Sensores
use App\Http\Requests\RegistroRequest;
use App\Models\Registro;

 Produção
use Illuminate\Http\Request;

class RegistroController extends Controller
{
 CRUD-Sensores
    public function store(RegistroRequest $request){
        $registro = Registro::create([
            "sensor_id" => $request->sensor_id,
            "valor" => $request->valor,
            "unidade" => $request->unidade,
            "data_hora" => $request->data_hora
        ]);
        return $registro;
    }
public function index(Request $request){
    
}
    


    public function store(RegistroRequest $request)
    {
        $registro = Registro::create([
            'sensor_id' => $request->sensor_id,
            'valor' => $request->valor,
            'unidade' => $request->unidade,
            'data_hora' => $request->data_hora
        ]);

        return $registro;
    }
 Produção
}
