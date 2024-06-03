<?php

namespace App\Repositories\Interfaces;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface
{
    public function getAll(array $columns = ['*'], array $relations = [], array $relations_count = []): Collection;

    public function getAllQuery(array $columns = ['*'], array $relations = [], array $relations_count = []): Builder;

    public function getAllByIds(array $ids, array $columns = ['*'], array $relations = [], array $relations_count = []): Collection;
    public function find(string $modelId, array $columns = ['*'], array $relations = [], array $relations_count = []): ?Model;
}