<?php

namespace App\Repositories;

use App\TestUser;

class UserRepository
{
    public static function getAll()
    {
        return TestUser::all();
    }
}
