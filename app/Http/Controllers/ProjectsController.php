<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;
use App\Models\CategoryProject;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Http\Requests\ProjectsRequest;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Projects::all();

        return view('project.all_project', ['projects' => $projects]);
    }
    public function detail_project($id)
    {
        $projects = Projects::where('id', $id)->firstOrFail();
        return view('project.detail_project', ['projects' => $projects]);
    }

    public function project_admin_index()
    {
        $projects = Projects::all();

        return view('project.project_admin', ['projects' => $projects]);
    }
    public function project_admin_add()
    {
        $cat = CategoryProject::all();
        return view('project.project_admin_add', ['category' => $cat]);
    }

    public function project_admin_store(Request $request)
    {
        $data = $request->all();

        $data['photo_cover'] = $request->file('photo_cover')->store('/images/photo_project/photo_cover', 'public');

        $data['photo_left'] = $request->file('photo_left')->store('/images/photo_project/photo_left', 'public');

        $data['photo_center'] = $request->file('photo_center')->store('/images/photo_project/photo_center', 'public');

        $data['photo_right'] = $request->file('photo_right')->store('/images/photo_project/photo_right', 'public');

        $data['icon_project'] = $request->file('icon_project')->store('/images/photo_project/icon_project', 'public');

        Projects::create($data);

        return redirect()
            ->route('project_admin')
            ->with('Success', 'New Project has been add');
    }

    public function project_admin_edit($id)
    {
        $cat = CategoryProject::all();
        $item = Projects::where('id', $id)->firstOrFail();
        return view('project.project_admin_edit', ['item' => $item, 'category' => $cat]);
    }
    public function project_admin_update(Request $request, $id)
    {
        $data = $request->all();

        if ($request->hasFile('photo_cover')) {
            // Do something with the file
            $data['photo_cover'] = $request->file('photo_cover')->store('/images/photo_project/photo_cover', 'public');
        } elseif ($request->hasFile('photo_left')) {
            $data['photo_left'] = $request->file('photo_left')->store('/images/photo_project/photo_left', 'public');
        } elseif ($request->hasFile('photo_center')) {
            $data['photo_center'] = $request->file('photo_center')->store('/images/photo_project/photo_center', 'public');
        } elseif ($request->hasFile('photo_right')) {
            $data['photo_right'] = $request->file('photo_right')->store('/images/photo_project/photo_right', 'public');
        } elseif ($request->hasFile('icon_project')) {
            $data['icon_project'] = $request->file('icon_project')->store('/images/photo_project/icon_project', 'public');
        }

        $item = Projects::findOrFail($id);

        $item->update($data);

        return redirect()
            ->route('project_admin')
            ->with('Success', 'The Project has been update');
    }
    public function project_admin_delete($id)
    {
        $item = Projects::findOrFail($id);
        $item->delete();
        return redirect()
            ->route('project_admin')
            ->with('Success', 'The Project has been delete');
    }
}
