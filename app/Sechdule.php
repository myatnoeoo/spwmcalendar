<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sechdule extends Model
{
    protected $fillable = [
        'title', 'meet_url', 'description','location', 'user_id', 'date','from_time', 'to_time'
    ];
}
