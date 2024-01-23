<?php

namespace App\Http\Controllers\Api;

use App\DTO\Chamados\CreateChamadosDTO;
use App\DTO\Chamados\UpdateChamadosDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateChamados;
use App\Http\Resources\ChamadosResource;
use App\Services\ChamadosService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChamadosController extends Controller
{
    public function __construct(protected ChamadosService $service)
    {

    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateChamados $request)
    {
        $chamado = $this->service->new(
            CreateChamadosDTO::makeFromRequest($request)
        );

        return new ChamadosResource($chamado);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!$chamado = $this->service->getOne($id)) {
            return response()->json([
                'error' => 'Não Encontrado'
            ], Response::HTTP_NOT_FOUND);
        }

        return new ChamadosResource($chamado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreUpdateChamados $request, string $id)
    {
        $chamado = $this->service->update(
            UpdateChamadosDTO::makeFromRequest($request, $id)
        );

        if(!$chamado) {
            return response()->json([
                'error' => 'Não Encontrado'
            ], Response::HTTP_NOT_FOUND);
        }

        return new ChamadosResource($chamado);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!$this->service->getOne($id)) {
            return response()->json([
                'error' => 'Não Encontrado'
            ], Response::HTTP_NOT_FOUND);
        }

        $this->service->delete($id);

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
