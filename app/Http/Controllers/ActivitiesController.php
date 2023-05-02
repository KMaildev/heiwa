<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activitie;


class ActivitiesController extends Controller
{
    public function index(){
        $activities = Activitie::all();
        return view('activities.index', compact('activities'));
    }
}
