<?php

namespace App\Http\Controllers\Chamados;

use App\Http\Controllers\Controller;
use App\Models\Chamados;

class ChamadosController extends Controller
{
    public function index(Chamados $chamados_model)
    {
        $chamados = $chamados_model->all();

        return view('chamados/index', compact('chamados'));
    }
}

?>