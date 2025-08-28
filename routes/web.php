<?php

use App\Livewire\Dashboard;
use App\Livewire\Sensores\SensorCreate;
use App\Livewire\Sensores\SensorEdit;
use App\Livewire\Sensores\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::prefix('sensor')->group(function () {
 Route::get('/create', SensorCreate::class)->name('sensor-create');
 Route::get('/index', SensorIndex::class)->name('sensor-index');
  Route::get('/edit/{id}', SensorEdit::class)->name('sensor-edit');
});