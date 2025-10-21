<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\SensorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('registro', [RegistroController::class, 'store']);

        
Route::put('/sensor/update/{codigo}', [SensorController::class, 'update']);

Route::get('/sensor/findbycod/{codigo}', [SensorController::class, 'findByCod']);