<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;
use App\Http\Resources\GalleryCollection;

class PostGalleriesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Post $post)
    {
        $this->authorize('view', $post);

        $search = $request->get('search', '');

        $galleries = $post
            ->galleries()
            ->search($search)
            ->latest()
            ->paginate();

        return new GalleryCollection($galleries);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post)
    {
        $this->authorize('create', Gallery::class);

        $validated = $request->validate([
            'project_id' => ['nullable', 'exists:projects,id'],
            'product_id' => ['nullable', 'exists:products,id'],
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'status' => ['required', 'boolean'],
        ]);

        $gallery = $post->galleries()->create($validated);

        return new GalleryResource($gallery);
    }
}
