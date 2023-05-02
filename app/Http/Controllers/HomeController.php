<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Activitie;
use App\Models\Team;

class HomeController extends Controller
{
    public function index(){
        $courses = Course::all();
        $activities = Activitie::all();
        $teams = Team::all();
        return view('welcome', compact('courses', 'activities', 'teams'));
    }

    public function about(){
        return view('about.index');
    }
}
