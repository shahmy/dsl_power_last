<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\GalleryResource;
use App\Http\Resources\GalleryCollection;

class ProductGalleriesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Product $product)
    {
        $this->authorize('view', $product);

        $search = $request->get('search', '');

        $galleries = $product
            ->galleries()
            ->search($search)
            ->latest()
            ->paginate();

        return new GalleryCollection($galleries);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $this->authorize('create', Gallery::class);

        $validated = $request->validate([
            'project_id' => ['nullable', 'exists:projects,id'],
            'name' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'status' => ['required', 'boolean'],
        ]);

        $gallery = $product->galleries()->create($validated);

        return new GalleryResource($gallery);
    }
}
