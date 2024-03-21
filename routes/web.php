<?php

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\SobreController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/servico', [ServicoController::class, 'index'])->name('servico');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/projeto', [ProjetoController::class, 'index'])->name('projeto');
