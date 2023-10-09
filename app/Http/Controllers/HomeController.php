<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Experiences;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Projects::orderBy('date', 'desc')
            ->limit(3)
            ->get();
        $experiences = Experiences::orderBy('end_date_exp', 'desc')
            ->limit(3)
            ->get();
        return view('home', ['projects' => $projects, 'experiences' => $experiences]);
    }
}
