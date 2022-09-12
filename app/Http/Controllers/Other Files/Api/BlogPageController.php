<?php

namespace App\Http\Controllers\Api;

use App\Models\BlogPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\BlogPageResource;
use App\Http\Resources\BlogPageCollection;
use App\Http\Requests\BlogPageStoreRequest;
use App\Http\Requests\BlogPageUpdateRequest;

class BlogPageController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', BlogPage::class);

        $search = $request->get('search', '');

        $blogPages = BlogPage::search($search)
            ->latest()
            ->paginate();

        return new BlogPageCollection($blogPages);
    }

    /**
     * @param \App\Http\Requests\BlogPageStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogPageStoreRequest $request)
    {
        $this->authorize('create', BlogPage::class);

        $validated = $request->validated();
        if ($request->hasFile('title_bg_image')) {
            $validated['title_bg_image'] = $request
                ->file('title_bg_image')
                ->store('public');
        }

        $blogPage = BlogPage::create($validated);

        return new BlogPageResource($blogPage);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BlogPage $blogPage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, BlogPage $blogPage)
    {
        $this->authorize('view', $blogPage);

        return new BlogPageResource($blogPage);
    }

    /**
     * @param \App\Http\Requests\BlogPageUpdateRequest $request
     * @param \App\Models\BlogPage $blogPage
     * @return \Illuminate\Http\Response
     */
    public function update(BlogPageUpdateRequest $request, BlogPage $blogPage)
    {
        $this->authorize('update', $blogPage);

        $validated = $request->validated();

        if ($request->hasFile('title_bg_image')) {
            if ($blogPage->title_bg_image) {
                Storage::delete($blogPage->title_bg_image);
            }

            $validated['title_bg_image'] = $request
                ->file('title_bg_image')
                ->store('public');
        }

        $blogPage->update($validated);

        return new BlogPageResource($blogPage);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BlogPage $blogPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, BlogPage $blogPage)
    {
        $this->authorize('delete', $blogPage);

        if ($blogPage->title_bg_image) {
            Storage::delete($blogPage->title_bg_image);
        }

        $blogPage->delete();

        return response()->noContent();
    }
}
