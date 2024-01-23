<?php

namespace App\DTO\Chamados;

use App\Enums\ChamadosStats;
use App\Http\Requests\StoreUpdateChamados;

class UpdateChamadosDTO
{
    public function __construct(
        public string $id,
        public string $titulo,
        public string $descricao,
        public string $email,
        public ChamadosStats $status,
    ) {}

    public static function makeFromRequest(StoreUpdateChamados $request, string $id = null): self
    {
        return new self(
            $id ?? $request->id,
            $request->titulo,
            $request->descricao,
            $request->email,
            ChamadosStats::a,
        );
    }
}