<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\CategoryProject;
use App\Models\Experiences;

class DashboardController extends Controller
{
    public function index()
    {
        $countPro = Projects::all()->count();
        $countExp = CategoryProject::all()->count();
        $countCat = Experiences::all()->count();
        return view('dashboard', ['countPro' => $countPro, 'countExp' => $countExp, 'countCat' => $countCat]);
    }
}
