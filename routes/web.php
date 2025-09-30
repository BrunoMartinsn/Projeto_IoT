<?php

 Crud-ambiente
use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use Illuminate\Support\Facades\Route;



Route::prefix('ambientes')->group(function () {
Route::get('create', AmbienteCreate::class)->name('ambiente-create');
Route::get('list', AmbienteList::class)->name('ambiente-list');
Route::get('/edit/{id}', AmbienteEdit::class)->name('ambiente-edit');

use App\Http\Controllers\RegistroController;
use App\Livewire\Dashboard;
use App\Livewire\Sensores\SensorCreate;
use App\Livewire\Sensores\SensorEdit;
use App\Livewire\Sensores\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

 CRUD-Sensores
Updated upstream
Route::prefix('sensor')->group(function () {
 Route::get('/create', SensorCreate::class)->name('sensor-create');
 Route::get('/index', SensorIndex::class)->name('sensor-index');
  Route::get('/edit/{id}', SensorEdit::class)->name('sensor-edit');
 Produção
});

 Stashed changes

Route::get('registro', [RegistroIndex::class]);                
 Produção
