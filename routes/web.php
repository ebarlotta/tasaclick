<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadController;
use App\Http\Controllers\AntecedentesController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\TasacionController;
use App\Http\Livewire\Antecedente\AntecedentesComponent;
use App\Http\Livewire\Comitente\ComitentesComponent;
use App\Http\Livewire\Departamentos\DepartaentosComponent;
use App\Http\Livewire\Empresa\EmpresasComponent;
use App\Http\Livewire\Listadopropiedades\ListadopropiedadesComponent;
use App\Http\Livewire\Listapropiedades\ListapropiedadesComponent;
use App\Http\Livewire\PropiedadesComponent;
use App\Http\Livewire\Provincia\ProvinciasComponent;
use App\Http\Livewire\Tasacion\TasacionesComponent;
use App\Http\Livewire\Tasador\TasadoresComponent;
use App\Http\Livewire\Usuario\UsuariosComponent;

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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::resource('/propiedades', PropiedadController::class);
// Route::resource('/propiedades/antecedentes', PropiedadController::class);
// Route::resource('/antecedentes', AntecedentesController::class);
// Route::resource('/tasaciones', TasacionController::class);

// Route::get('/listadopropiedades', ListadopropiedadesComponent::class)->name('listadopropiedades');
// Route::get('/propiedades2', [PropiedadesComponent::class,'render2'])->name('propiedades2');
Route::get('/propiedades', PropiedadesComponent::class)->name('propiedades');
Route::get('/departamentos', DepartaentosComponent::class)->name('departamentos');
Route::get('/provincias', ProvinciasComponent::class)->name('provincias');
Route::get('/tasadores', TasadoresComponent::class)->name('tasadores');
Route::get('/comitentes', ComitentesComponent::class)->name('comitentes');
Route::get('/zonas', ComitentesComponent::class)->name('zonas');
Route::get('/empresas', EmpresasComponent::class)->name('empresas');
Route::get('/usuarios', UsuariosComponent::class)->name('usuarios');
Route::get('/tasaciones', TasacionesComponent::class)->name('tasaciones');
Route::get('/antecedentes', AntecedentesComponent::class)->name('antecedentes');
Route::get('/listapropiedades', ListapropiedadesComponent::class)->name('listapropiedades');






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
