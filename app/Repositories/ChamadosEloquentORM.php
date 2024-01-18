<?php

namespace App\Repositories;

use App\DTO\CreateChamadosDTO;
use App\DTO\UpdateChamadosDTO;
use App\Models\Chamados;
use App\Repositories\ChamadosRepositoryInterface;
use stdClass;

class ChamadosEloquentORM implements ChamadosRepositoryInterface
{
    public function __construct(
        protected Chamados $model
    ) {}

    public function getAll(string $filter = null): array
    {
        return $this->model
                    ->where(function ($query) use ($filter) {
                        if ($filter) {
                            $query->where('titulo', $filter);
                            $query->orWere('descricao', 'like', "%{$filter}%");
                        }
                    })
                    ->get()
                    ->toArray();
    }

    public function getOne(string $id): stdClass|null
    {
        $chamado = $this->model->find($id);

        if(!$chamado) return null;

        return (object) $chamado->toArray();
    }

    public function delete(string|int $id): void
    {
        $this->model->findOrFail($id)->delete();
    }

    public function new(CreateChamadosDTO $dto): stdClass
    {
        $chamado = $this->model->create(
            (array) $dto
        );

        return (object) $chamado->toArray();
    }

    public function update(UpdateChamadosDTO $dto): stdClass|null
    {
        if (!$chamado = $this->model->find($dto->id)) {
            return null;
        }

        $chamado->update(
            (array) $dto
        );

        return (object) $chamado->toArray();
    }
}