<?php

use App\Http\Controllers\Chamados\{ChamadosController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chamados', [ChamadosController::class, 'index'])->name('chamados.index');