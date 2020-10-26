<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'sechdules';
    
    protected $fillable = [
        'title', 'meet_url', 'description','location', 'user_id', 'date','from_time', 'to_time'
    ];
}
