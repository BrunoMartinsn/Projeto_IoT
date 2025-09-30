<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
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
}
