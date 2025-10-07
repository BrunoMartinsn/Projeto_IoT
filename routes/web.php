<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;

use App\Livewire\Sensores\SensorCreate;
use App\Livewire\Sensores\SensorEdit;
use App\Livewire\Sensores\SensorIndex;

use App\Livewire\RegistroIndex;

use App\Livewire\Dashboard;

Route::get('/', Dashboard::class);

Route::prefix('ambientes')->group(function () {
  Route::get('create', AmbienteCreate::class)->name('ambiente-create');
  Route::get('list', AmbienteList::class)->name('ambiente-list');
  Route::get('/edit/{id}', AmbienteEdit::class)->name('ambiente-edit');
});

Route::prefix('sensor')->group(function () {
  Route::get('/create', SensorCreate::class)->name('sensor-create');
  Route::get('/index', SensorIndex::class)->name('sensor-index');
  Route::get('/edit/{id}', SensorEdit::class)->name('sensor-edit');
});

Route::get('registro', RegistroIndex::class)->name('registro-index');
