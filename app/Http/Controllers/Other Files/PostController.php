<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostStoreRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PostUpdateRequest;

class PostController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Post::class);

        $search = $request->get('search', '');

        $posts = Post::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.posts.index', compact('posts', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Post::class);

        $categories = Category::get();
        $tags = Tag::get();

        return view('app.posts.create', compact('categories', 'tags'));
    }

    /**
     * @param \App\Http\Requests\PostStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStoreRequest $request)
    {
        $this->authorize('create', Post::class);

        $validated = $request->validated();
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('public');
        }

        $post = Post::create($validated);

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        return redirect()
            ->route('posts.edit', $post)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Post $post)
    {
        $this->authorize('view', $post);

        return view('app.posts.show', compact('post'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Post $post)
    {
        $this->authorize('update', $post);

        $categories = Category::get();
        $tags = Tag::get();

        return view('app.posts.edit', compact('post', 'categories', 'tags'));
    }

    /**
     * @param \App\Http\Requests\PostUpdateRequest $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, Post $post)
    {
        $this->authorize('update', $post);

        $validated = $request->validated();
        if ($request->hasFile('featured_image')) {
            if ($post->featured_image) {
                Storage::delete($post->featured_image);
            }

            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('public');
        }

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        $post->update($validated);

        return redirect()
            ->route('posts.edit', $post)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Post $post)
    {
        $this->authorize('delete', $post);

        if ($post->featured_image) {
            Storage::delete($post->featured_image);
        }

        $post->delete();

        return redirect()
            ->route('posts.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
