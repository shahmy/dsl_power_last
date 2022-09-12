<?php

namespace App\Http\Controllers\Api;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;
use App\Http\Resources\GalleryCollection;
use App\Http\Requests\GalleryStoreRequest;
use App\Http\Requests\GalleryUpdateRequest;

class GalleryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Gallery::class);

        $search = $request->get('search', '');

        $galleries = Gallery::search($search)
            ->latest()
            ->paginate();

        return new GalleryCollection($galleries);
    }

    /**
     * @param \App\Http\Requests\GalleryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryStoreRequest $request)
    {
        $this->authorize('create', Gallery::class);

        $validated = $request->validated();

        $gallery = Gallery::create($validated);

        return new GalleryResource($gallery);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Gallery $gallery)
    {
        $this->authorize('view', $gallery);

        return new GalleryResource($gallery);
    }

    /**
     * @param \App\Http\Requests\GalleryUpdateRequest $request
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryUpdateRequest $request, Gallery $gallery)
    {
        $this->authorize('update', $gallery);

        $validated = $request->validated();

        $gallery->update($validated);

        return new GalleryResource($gallery);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Gallery $gallery)
    {
        $this->authorize('delete', $gallery);

        $gallery->delete();

        return response()->noContent();
    }
}
