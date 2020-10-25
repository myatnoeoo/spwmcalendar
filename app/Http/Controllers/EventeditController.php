<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;

class EventeditController extends Controller
{
    public function edit(){
        return view('eventedit');
    }

    public function getAllUser(){
        return UserRepository::getAll();
    }
}
