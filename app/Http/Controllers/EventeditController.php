<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventeditController extends Controller
{
    public function edit(){
        return view('eventedit');
    }
}
