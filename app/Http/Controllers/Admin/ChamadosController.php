<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chamados;

class ChamadosController extends Controller
{
    public function index()
    {
        return view('admin/chamados/index');
    }

    public function get_all(Chamados $chamados_model)
    {
        $chamados = $chamados_model->all();

        // return view('admin/chamados/index', compact('chamados'));
        // ou
        // return view('admin/chamados/index', [
        //     'chamados' => $chamados
        // ]);
    }
}

?>