<?php

use App\Http\Controllers\Chamados\{ChamadosController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/chamados/insert_chamado', [ChamadosController::class, 'insert_chamado'])->name('chamados.insert_chamado');
Route::get('/chamados/create', [ChamadosController::class, 'create'])->name('chamados.create');
Route::get('/chamados', [ChamadosController::class, 'index'])->name('chamados.index');