<?php

namespace App\DTO;
use App\Http\Requests\StoreUpdateChamados;

class CreateChamadosDTO
{
    public function __construct(
        public string $titulo,
        public string $descricao,
        public string $email,
        public string $status,
    ) {}

    public static function makeFromRequest(StoreUpdateChamados $request): self
    {
        return new self(
            $request->titulo,
            $request->descricao,
            $request->email,
            1,
        );
    }
}