<?php

use App\Http\Controllers\Empresas\empresaController;
use App\Http\Controllers\Formularios\FormularioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UsuariosController;
use App\Models\Pessoas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //criação da rota de emrpesa
    Route::resource("empresas",empresaController::class)->only(['index','edit','create','store','update'])->missing(function(){
        return redirect()->route("empresas.index");
    });
    
    Route::get('/empresas/buscaporid/{id}', [empresaController::class, 'Buscarporid']);
    Route::get('/empresasJson', [empresaController::class, 'empresaJson'])->name("empresas.json");

    Route::resource('pessoas',  UsuariosController::class)->only('index','destroy','store');
    Route::get('/pessoasJson', [UsuariosController::class, 'indexJson']);
    
    Route::resource('formulario', FormularioController::class)->only('index','create','store')->missing(function(){
        return redirect()->route("formulario.index");
    });
});

require __DIR__.'/auth.php';
