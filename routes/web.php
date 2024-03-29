<?php

use App\Http\Controllers\Chamados\{ChamadosController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chamados', [ChamadosController::class, 'index'])->name('chamados.index');
Route::post('/chamados/store', [ChamadosController::class, 'store'])->name('chamados.store');
Route::get('/chamados/create', [ChamadosController::class, 'create'])->name('chamados.create');
Route::get('/chamados/{id}', [ChamadosController::class, 'show'])->name('chamados.show');
Route::get('/chamados/edit/{id}', [ChamadosController::class, 'edit'])->name('chamados.edit');
Route::put('/chamados/{id}', [ChamadosController::class, 'update'])->name('chamados.update');
Route::delete('/chamados/{id}', [ChamadosController::class, 'destroy'])->name('chamados.destroy');