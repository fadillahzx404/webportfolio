<?php

namespace App\Http\Controllers;

use App\Models\CategoryProject;
use App\Http\Requests\StoreCategoryProjectRequest;
use App\Http\Requests\UpdateCategoryProjectRequest;

class CategoryProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $catpro = CategoryProject::all();
        return view('category_project.category_project_admin', ['catpro' => $catpro]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function add()
    {
        $exp = CategoryProject::all();
        return view('category_project.category_project_add', ['exp' => $exp]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryProjectRequest $request)
    {
        $data = $request->all();

        CategoryProject::create($data);

        return redirect()
            ->route('category_project_admin')
            ->with('Success', 'New Category Project has been added');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cat = CategoryProject::where('id', $id)->firstOrFail();
        return view('category_project.category_project_edit', ['cat' => $cat]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryProjectRequest $request, $id)
    {
        $data = $request->all();

        $item = CategoryProject::findOrFail($id);

        $item->update($data);

        return redirect()
            ->route('category_project_admin')
            ->with('Success', 'The Category Project has been update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $item = CategoryProject::findOrFail($id);
        $item->delete();
        return redirect()
            ->route('category_project_admin')
            ->with('Success', 'The Category Project has been delete');
    }
}
