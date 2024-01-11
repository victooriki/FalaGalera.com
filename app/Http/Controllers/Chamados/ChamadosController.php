<?php

namespace App\Http\Controllers\Chamados;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateChamados;
use App\Models\Chamados;
use Illuminate\Http\Request;

class ChamadosController extends Controller
{
    protected $chamados;

    public function __construct(Chamados $chamados)
    {
        $this->chamados = $chamados;
    }

    public function index()
    {
        $chamados = $this->chamados->all();

        return view('chamados.index', compact('chamados'));
    }

    public function create()
    {

        return view('chamados.create');
    }

    public function insert_chamado(StoreUpdateChamados $request)
    {
        $data = $request->validated();
        $data['stats'] = 1;

        $this->chamados->create($data);

        return redirect()->route('chamados.index');
    }

    public function show(string|int $id)
    {
        if(!$chamado = $this->chamados->find($id)) {
            return back();
        }

        return view('chamados.show', compact('chamado'));
    }

    public function edit(string|int $id)
    {
        if(!$chamado = $this->chamados->find($id)) {
            return back();
        }

        return view('chamados.edit', compact('chamado'));
    }

    public function update(StoreUpdateChamados $request, string|int $id)
    {
        if(!$chamado = $this->chamados->find($id)) {
            return back();
        }

        $chamado->update($request->validated());

        return redirect()->route('chamados.index');
    }

    public function destroy(string|int $id)
    {
        if(!$chamado = $this->chamados->find($id)) {
            return back();
        }

        $chamado->delete();

        return redirect()->route('chamados.index');
    }
}
