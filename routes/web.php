<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadController;
use App\Http\Controllers\AntecedentesController;
use App\Http\Controllers\TasacionController;
use App\Http\Livewire\PropiedadesComponent;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/propiedades', PropiedadController::class);
// Route::resource('/propiedades/antecedentes', PropiedadController::class);
Route::resource('/antecedentes', AntecedentesController::class);
Route::resource('/tasaciones', TasacionController::class);

Route::get('/propiedades2', [PropiedadesComponent::class,'render2'])->name('propiedades2');
Route::get('/propiedades', PropiedadesComponent::class)->name('propiedades');




