<?php

namespace App\Repositories;

use App\Repositories\Interfaces\EloquentRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepositoryInterface implements EloquentRepositoryInterface
{
    protected Model $model;

    public function getAll(array $columns = ['*'], array $relations = [], array $relations_count = []): Collection
    {
        return $this->model
            ->query()
            ->select($columns)
            ->with($relations)
            ->withCount($relations_count)
            ->latest('id')
            ->get();
    }

    public function getAllQuery(array $columns = ['*'], array $relations = [], array $relations_count = []): Builder
    {
        return $this->model
            ->query()
            ->select($columns)
            ->with($relations)
            ->withCount($relations_count);
    }

    public function getAllByIds(array $ids, array $columns = ['*'], array $relations = [], array $relations_count = []): Collection
    {
        return $this->model
            ->query()
            ->whereIn('id', $ids)
            ->with($relations)
            ->withCount($relations_count)
            ->latest('id')
            ->get($columns);
    }
    public function find(string $modelId, array $columns = ['*'], array $relations = [], array $relations_count = []): ?Model {
        return $this->model
            ->query()
            ->select($columns)
            ->with($relations)
            ->withCount($relations_count)
            ->find($modelId);
    }
}