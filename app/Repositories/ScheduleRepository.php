<?php

namespace App\Repositories;

use App\Schedule;

class ScheduleRepository
{
    public static function getAll()
    {
        return Schedule::all();
    }
}
