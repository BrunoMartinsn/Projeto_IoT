<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use App\Livewire\Auth\Login;
use App\Livewire\ControleLed;
use App\Livewire\Sensores\SensorCreate;
use App\Livewire\Sensores\SensorEdit;
use App\Livewire\Sensores\SensorIndex;

use App\Livewire\RegistroIndex;

use App\Livewire\Dashboard;

Route::get('/', Dashboard::class)->middleware('auth')->name('dashboard');

Route::get('login', Login::class)->middleware('auth');

Route::prefix('ambientes')->group(function () {
  Route::get('create', AmbienteCreate::class)->middleware('auth')->name('ambiente-create');
  Route::get('list', AmbienteList::class)->middleware('auth')->name('ambiente-list');
  Route::get('/edit/{id}', AmbienteEdit::class)->middleware('auth')->name('ambiente-edit');
});

Route::prefix('sensor')->group(function () {
  Route::get('/create', SensorCreate::class)->middleware('auth')->name('sensor-create');
  Route::get('/index', SensorIndex::class)->middleware('auth')->name('sensor-index');
  Route::get('/edit/{id}', SensorEdit::class)->middleware('auth')->name('sensor-edit');
});

Route::get('registro', RegistroIndex::class)->middleware('auth')->name('registro-index');

Route::get('controle/led', ControleLed::class)->middleware('auth')->name('controle');
