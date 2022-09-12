<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;
use App\Http\Resources\GalleryCollection;

class ProjectGalleriesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Project $project)
    {
        $this->authorize('view', $project);

        $search = $request->get('search', '');

        $galleries = $project
            ->galleries()
            ->search($search)
            ->latest()
            ->paginate();

        return new GalleryCollection($galleries);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Project $project)
    {
        $this->authorize('create', Gallery::class);

        $validated = $request->validate([
            'product_id' => ['nullable', 'exists:products,id'],
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'status' => ['required', 'boolean'],
        ]);

        $gallery = $project->galleries()->create($validated);

        return new GalleryResource($gallery);
    }
}
