<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Versenyek;
use App\Livewire\VersenyHozzaad;

Route::get('/', VersenyHozzaad::class);
Route::get('/versenyek', Versenyek::class);