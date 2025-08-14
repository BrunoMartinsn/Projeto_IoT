<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteList;
use Illuminate\Support\Facades\Route;

Route::get('create', AmbienteCreate::class)->name('ambiente-create');
Route::get('list', AmbienteList::class)->name('ambiente-list');
Route::get('edit', AmbienteEdit::class)->name('ambiente-edit');