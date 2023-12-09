<?php

use App\Http\Controllers\Admin\{ChamadosController};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/chamados', [ChamadosController::class, 'index'])->name('chamados.index');