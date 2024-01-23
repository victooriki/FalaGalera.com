<?php

use App\Http\Controllers\Api\ChamadosController;
use Illuminate\Support\Facades\Route;

Route::apiResource('chamados', ChamadosController::class);