<?php

namespace App\Services;

use App\Blog;

class BlogService
{
    public static function store($data) : Blog
    {
        return Blog::create($data);
    }
    public static function update($data, $blog) : Blog
    {
        $blog->update($data);
        return $blog;
    }
}
