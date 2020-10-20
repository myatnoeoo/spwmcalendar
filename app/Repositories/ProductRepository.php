<?php

namespace App\Repositories;

use App\Product;

class ProductRepository
{
    public static function getAll()
    {
        return Product::all();
    }
}
