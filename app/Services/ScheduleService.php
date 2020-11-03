<?php

namespace App\Services;

use App\Schedule;

class ScheduleService
{
    public static function store($data) : Schedule
    {
        $schedule = Schedule::create($data);
        if($data['guest_user']){
            $schedule->guest()->attach($data['guest_user']);
        }
        return $schedule;
    }

    public static function update()
    {

    }

}
