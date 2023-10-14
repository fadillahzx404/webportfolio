<?php

namespace App\Http\Controllers;

use App\Models\Reviews;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;
use Illuminate\Support\Facades\Storage;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Reviews::all();
        return view('reviews.review_admin',['reviews'=>$reviews]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reviews $reviews,$id)
    {
        $item = Reviews::where('id', $id)->firstOrFail();
        return view('reviews.review_edit',['rv' => $item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReviewRequest $request, Reviews $review,$id)
    {
        $data = $request->all();

        if ($request->hasFile('foto_profile')) {
            // Do something with the file
            $data['foto_profile'] = $request->file('foto_profile')->store('/images/foto_profile', 'public');
        }

        $item = Reviews::findOrFail($id);

        $item->update($data);

        return redirect()
            ->route('review_admin')
            ->with('Success', 'The Project has been update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reviews $reviews,$id)
    {
        $item = Reviews::findOrFail($id);
        $foto = $item['foto_profile'];
        Storage::disk('public')->delete($foto);
        $item->delete();
        return redirect()
            ->route('review_admin')
            ->with('Success', 'Reviews has been delete');
    }
}
