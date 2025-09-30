<?php

use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class);

Route::get('registro', [RegistroIndex::class]);                