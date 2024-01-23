<?php

namespace App\Http\Controllers\Api;

use App\DTO\Chamados\CreateChamadosDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateChamados;
use App\Http\Resources\ChamadosResource;
use App\Services\ChamadosService;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
