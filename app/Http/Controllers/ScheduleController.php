<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScheduleController extends Controller
{

    public function home()
    {
        return view('auth.user.home');
    }

}
