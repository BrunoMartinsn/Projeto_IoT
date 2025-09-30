<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('registro', [RegistroController::class, 'store']);         