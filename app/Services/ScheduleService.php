<?php

namespace App\Services;

use App\Schedule;

class ScheduleService
{
    public static function store($data) : Schedule
    {
        $schedules = Schedule::create($data);
        return $schedules;
    }
    public static function update()
    {

    }
}
