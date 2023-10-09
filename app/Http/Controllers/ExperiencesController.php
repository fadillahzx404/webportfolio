<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experiences;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Http\Requests\ExperienceRequest;

class ExperiencesController extends Controller
{
    public function index()
    {
        $exp = Experiences::orderBy('start_date_exp', 'asc')->get();

        return view('experiences.all_experiences', ['exp' => $exp]);
    }
    public function experience_admin_index()
    {
        $exp = Experiences::all();
        return view('experiences.experience_admin', ['exp' => $exp]);
    }
    public function experience_admin_add()
    {
        $exp = Experiences::all();
        return view('experiences.experience_admin_add', ['exp' => $exp]);
    }
    public function experience_admin_store(ExperienceRequest $request)
    {
        $data = $request->all();

        Experiences::create($data);

        return redirect()
            ->route('experience_admin')
            ->with('Success', 'New Experience has been added');
    }
    public function experience_admin_edit($id)
    {
        $exp = Experiences::where('id', $id)->firstOrFail();
        return view('experiences.experience_admin_edit', ['exp' => $exp]);
    }
    public function experience_admin_update(ExperienceRequest $request, $id)
    {
        $data = $request->all();

        $item = Experiences::findOrFail($id);

        $item->update($data);

        return redirect()
            ->route('experience_admin')
            ->with('Success', 'The experience has been update');
    }

    public function experience_admin_delete($id)
    {
        $item = Experiences::findOrFail($id);
        $item->delete();
        return redirect()
            ->route('experience_admin')
            ->with('Success', 'The experience has been delete');
    }
    public function download_cv()
    {
        $exp = Experiences::orderBy('start_date_exp', 'asc')->get();

        return view('download_cv', ['exp' => $exp]);
    }
}
