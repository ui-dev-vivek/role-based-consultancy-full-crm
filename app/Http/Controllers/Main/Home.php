<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

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

    public function freeCourses()
    {
        $freeCourses = Cache::remember('free_courses_updated', 60 * 60 * 3, function () {
            return Http::get('https://real-discount.vercel.app/api/load-courses')->json();
        });
        return view('main.training_placement.free_courses', compact('freeCourses'));
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
