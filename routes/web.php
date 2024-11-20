<?php

use App\Livewire\ForduloHozzaad;
use App\Livewire\ForduloReszletes;
use Illuminate\Support\Facades\Route;
use App\Livewire\Versenyek;
use App\Livewire\VersenyekReszletes;
use App\Livewire\VersenyHozzaad;

Route::get('/', VersenyHozzaad::class);
Route::get('/versenyek', Versenyek::class);
Route::get('/versenyek/{id}', VersenyekReszletes::class);
Route::get('/versenyek/{id}/forduloAdd', ForduloHozzaad::class);
Route::get('/fordulo/{id}', ForduloReszletes::class);