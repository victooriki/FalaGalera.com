<?php

namespace App\Repositories;

use App\DTO\{
    CreateChamadosDTO,
    UpdateChamadosDTO
};
use stdClass;

interface ChamadosRepositoryInterface
{
    public function paginate(int $page = 1, int $totalPerPage = 15, string $filter = null): PaginationInterface;
    public function getAll(string $filter = null): array;
    public function getOne(string $id): stdClass|null;
    public function delete(string|int $id): void;
    public function new(CreateChamadosDTO $dto): stdClass;
    public function update(UpdateChamadosDTO $dto): stdClass|null;
}