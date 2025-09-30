<?php

use Illuminate\Support\Facades\Route;


use App\Livewire\Dashboard;
Route::get('/', Dashboard::class);

//////////////////////////////////////////////////////
use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;


Route::prefix('ambientes')->group(function () {
Route::get('create', AmbienteCreate::class)->name('ambiente-create');
Route::get('list', AmbienteList::class)->name('ambiente-list');
Route::get('/edit/{id}', AmbienteEdit::class)->name('ambiente-edit');
});
////////////////////////////////////////////////////////////////
use App\Livewire\Sensores\SensorCreate;
use App\Livewire\Sensores\SensorEdit;
use App\Livewire\Sensores\SensorIndex;

Route::prefix('sensor')->group(function () {
 Route::get('/create', SensorCreate::class)->name('sensor-create');
 Route::get('/index', SensorIndex::class)->name('sensor-index');
  Route::get('/edit/{id}', SensorEdit::class)->name('sensor-edit');
 
});
///////////////////////////////////////////////////////////////////
use App\Livewire\Registro\RegistroIndex;

Route::get('registro', RegistroIndex::class)->name('registro-index');                

