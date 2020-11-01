<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';
    
    protected $fillable = [
        'title', 'meet_url', 'description','location', 'user_id', 'date','from_time', 'to_time'
    ];

    public function guest()
    {
        return $this->belongsToMany(User::class, 'sechdule_guest')->withPivot('id', 'user_id', 'schedule_id');
    }
}
