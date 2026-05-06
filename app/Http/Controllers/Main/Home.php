<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
    public function home()
    {
        return view('main.home');
    }
    public function trainings()
    {
        return view('main.trainings');
    }
    public function intellectualProperty()
    {
        return view('main.intellectual_property');
    }
    public function research()
    {
        return view('main.research');
    }
}
