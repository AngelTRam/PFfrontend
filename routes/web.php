<?php

use App\Http\Livewire\Lugares;
use App\Http\Livewire\LugaresEdit;
use App\Http\Livewire\LugaresShow;
use App\Http\Livewire\LugaresViajes;
use App\Http\Livewire\LugaresViajesEdit;
use App\Http\Livewire\LugaresViajesShow;
use App\Http\Livewire\Viajes;
use App\Http\Livewire\ViajesEdit;
use App\Http\Livewire\ViajesShow;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lugares',Lugares::class);
Route::get('/lugares/{id}',LugaresShow::class);
Route::get('/lugares/modificar/{id}',LugaresEdit::class);
Route::get('/viajes',Viajes::class);
Route::get('/viajes/{id}',ViajesShow::class);
Route::get('/viajes/modificar/{id}',ViajesEdit::class);
Route::get('/lugaresviajes',LugaresViajes::class);
Route::get('/lugaresviajes/{id}',LugaresViajesShow::class);
Route::get('/lugaresviajes/modificar/{id}',LugaresViajesEdit::class);
