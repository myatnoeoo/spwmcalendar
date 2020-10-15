<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        's_date', 
        's_from_time', 
        's_to_time',
        's_guest', 
        's_location',
        's_meeting_link', 
        'created_user',
    ];

}
