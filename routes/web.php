<?php

use App\Http\Controllers\ContasController;
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
Route::match(['get','post'],'/', [ContasController::class, 'listarContas'])->name('listar_contas');
Route::match(['get','post'],'/adicionar', [ContasController::class, 'index'])->name('adicionar');
Route::match(['get','post'],'/adicionar/conta', [ContasController::class, 'adicionarConta'])->name('adicionar_conta');
Route::get('/editPagar/{id}',[ContasController::class, 'editPagar'])->name('editPagar');
Route::get('/editReceber/{id}',[ContasController::class, 'editReceber'])->name('editReceber');
Route::put('/editPagar/{id}',[ContasController::class, 'updatePagar'])->name('updatePagar');
Route::put('/editReceber/{id}',[ContasController::class, 'updateReceber'])->name('updateReceber');