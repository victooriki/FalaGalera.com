<?php

namespace App\Http\Controllers\Chamados;

use App\DTO\Chamados\CreateChamadosDTO;
use App\DTO\Chamados\UpdateChamadosDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateChamados;
use App\Models\Chamados;
use App\Services\ChamadosService;
use Illuminate\Http\Request;

class ChamadosController extends Controller
{
    public function __construct(protected Chamados $chamados, protected ChamadosService $service)
    {

    }

    public function index(Request $request)
    {
        $chamados = $this->service->paginate(
            page: $request->get('page', 1),
            totalPerPage: $request->get('perPage', 5),
            filter: $request->filter,
        );

        $filters = ['filter' => $request->get('filter', '')];

        return view('chamados.index', compact('chamados', 'filters'));
    }

    public function create()
    {
        return view('chamados.create');
    }

    public function store(StoreUpdateChamados $request)
    {
        $this->service->new(
            CreateChamadosDTO::makeFromRequest($request)
        );

        return redirect()
                ->route('chamados.index')
                ->with('message', 'Cadastrado com sucesso!');
    }

    public function show(string|int $id)
    {
        if(!$chamado = $this->service->getOne($id)) {
            return back();
        }

        return view('chamados.show', compact('chamado'));
    }

    public function edit(string|int $id)
    {
        if(!$chamado = $this->service->getOne($id)) {
            return back();
        }

        return view('chamados.edit', compact('chamado'));
    }

    public function update(StoreUpdateChamados $request, string|int $id)
    {
        $chamado = $this->service->update(
            UpdateChamadosDTO::makeFromRequest($request)
        );

        if(!$chamado) {
            return back();
        }

        return redirect()
                ->route('chamados.index')
                ->with('message', 'Atualizado com sucesso!');
    }

    public function destroy(string|int $id)
    {
        $this->service->delete($id);

        return redirect()
                ->route('chamados.index')
                ->with('message', 'Deletado com sucesso!');
    }
}
