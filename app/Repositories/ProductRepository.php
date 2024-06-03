<?php

namespace App\Repositories;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterfaceInterface;

class ProductRepository extends BaseRepositoryInterface implements ProductRepositoryInterfaceInterface
{
    public function __construct(Product $model)
    {
        $this->model = $model;
    }
}