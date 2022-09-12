<?php
namespace App\Http\Controllers\Api;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TagCollection;

class PostTagsController extends Controller
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

        $tags = $post
            ->tags()
            ->search($search)
            ->latest()
            ->paginate();

        return new TagCollection($tags);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Post $post, Tag $tag)
    {
        $this->authorize('update', $post);

        $post->tags()->syncWithoutDetaching([$tag->id]);

        return response()->noContent();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Post $post, Tag $tag)
    {
        $this->authorize('update', $post);

        $post->tags()->detach($tag);

        return response()->noContent();
    }
}
