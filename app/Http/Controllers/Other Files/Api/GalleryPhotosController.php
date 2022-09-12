<?php

namespace App\Http\Controllers\Api;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PhotoResource;
use App\Http\Resources\PhotoCollection;

class GalleryPhotosController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Gallery $gallery)
    {
        $this->authorize('view', $gallery);

        $search = $request->get('search', '');

        $photos = $gallery
            ->photos()
            ->search($search)
            ->latest()
            ->paginate();

        return new PhotoCollection($photos);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Gallery $gallery)
    {
        $this->authorize('create', Photo::class);

        $validated = $request->validate([
            'image' => ['required', 'image', 'max:1024'],
            'status' => ['nullable', 'boolean'],
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        $photo = $gallery->photos()->create($validated);

        return new PhotoResource($photo);
    }
}
