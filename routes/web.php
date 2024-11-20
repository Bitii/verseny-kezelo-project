<?php

use App\Livewire\ForduloHozzaad;
use Illuminate\Support\Facades\Route;
use App\Livewire\Versenyek;
use App\Livewire\VersenyekReszletes;
use App\Livewire\VersenyHozzaad;

Route::get('/', VersenyHozzaad::class);
Route::get('/versenyek', Versenyek::class);
Route::get('/versenyek/{id}', VersenyekReszletes::class);
Route::get('/versenyek/{id}/forduloAdd', ForduloHozzaad::class);