<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrotaController;

//Home
Route::get('/', [FrotaController::class, 'showHome'])->name('mostrar-home');




Route::get('/gerenciar-frota', [FrotaController::class,'gerenciarFrota'])->name('gerenciar-frota');

Route::get('/alterar-frota/{id}', [FrotaController::class,'mostrarFrotaId'])->name('mostrar-frota-id');

Route::get('/salvar-frota', [FrotaController::class,'showFormulario'])->name('mostrar-formulario');

Route::post('/salvar-frota', [FrotaController::class,'salvarFrota'])->name('cadastrar-formulario');

Route::delete('/apaga-frota/{id}', [FrotaController::class, 'destroy'])->name('apagar-frota');

Route::put('/alterar-frota/{id}', [FrotaController::class, 'update'])->name('alterar-frota');