<?php

namespace App\Services;

use App\Product;

class ProductService
{
    public static function store($data) : Product
    {
        $products = Product::create($data);
        return $products;
    }
    public static function update()
    {

    }
}
