<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use App\Models\Reviews;
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
        $reviews = Reviews::all();
        return view('home', ['projects' => $projects, 'experiences' => $experiences,'reviews' => $reviews]);
    }
    public function form_review(Request $request)
    {
        $data = $request->all();


        if ($request->file('foto_profile') !== NULL) {
            $data['foto_profile'] = $request->file('foto_profile')->store('/images/foto_profile', 'public');
        }


        Reviews::create($data);

        return redirect()
            ->route('home')
            ->with('Success', 'Thanks you for your review :).');
    }
}
