<?php

namespace App\Http\Controllers\Api;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\VideoResource;
use App\Http\Resources\VideoCollection;

class GalleryVideosController extends Controller
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

        $videos = $gallery
            ->videos()
            ->search($search)
            ->latest()
            ->paginate();

        return new VideoCollection($videos);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Gallery $gallery)
    {
        $this->authorize('create', Video::class);

        $validated = $request->validate([
            'video_url' => ['required', 'max:255', 'string'],
            'status' => ['nullable', 'boolean'],
        ]);

        $video = $gallery->videos()->create($validated);

        return new VideoResource($video);
    }
}
