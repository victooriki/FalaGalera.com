<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ChamadosController extends Controller
{
    public function index()
    {
        return view('admin/chamados/index');
    }
}

?>