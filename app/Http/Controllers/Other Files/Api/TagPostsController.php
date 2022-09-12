<?php
namespace App\Http\Controllers\Api;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostCollection;

class TagPostsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Tag $tag)
    {
        $this->authorize('view', $tag);

        $search = $request->get('search', '');

        $posts = $tag
            ->posts()
            ->search($search)
            ->latest()
            ->paginate();

        return new PostCollection($posts);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tag $tag, Post $post)
    {
        $this->authorize('update', $tag);

        $tag->posts()->syncWithoutDetaching([$post->id]);

        return response()->noContent();
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tag $tag
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tag $tag, Post $post)
    {
        $this->authorize('update', $tag);

        $tag->posts()->detach($post);

        return response()->noContent();
    }
}
