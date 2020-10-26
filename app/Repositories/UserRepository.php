<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    public static function getAll()
    {
        return User::all();
    }
}
