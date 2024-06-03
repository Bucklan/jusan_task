<?php

namespace App\Services\Product;

use App\Models\Product;
use App\Repositories\Interfaces\ProductRepositoryInterfaceInterface;

class ProductService
{
    protected ProductRepositoryInterfaceInterface $productRepository;

    public function __construct(ProductRepositoryInterfaceInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->productRepository->getAll();
    }

    public function createProduct(array $data): void
    {
        $data['image'] = $this->generateImage($data['image']);
        Product::create($data);
    }

    public function updateProduct(\App\Models\Product $product, array $data)
    {

    }

    public function deleteProduct(\App\Models\Product $product)
    {
    }

    private function generateImage($image): ?string
    {
        if (!$image) {
            return null;
        }
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/images/products');
        $image->move($destinationPath, $image_name);
        return $image_name;
    }


}