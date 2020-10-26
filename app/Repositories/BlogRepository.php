<?php

namespace App\Repositories;

use App\Blog;

class BlogRepository
{
    public static function getAll()
    {
        return Blog::all();
    }
}
