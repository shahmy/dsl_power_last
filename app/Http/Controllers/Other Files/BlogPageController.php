<?php

namespace App\Http\Controllers;

use App\Models\BlogPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            ->paginate(5)
            ->withQueryString();

        return view('app.blog_pages.index', compact('blogPages', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', BlogPage::class);

        return view('app.blog_pages.create');
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

        return redirect()
            ->route('blog-pages.edit', $blogPage)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BlogPage $blogPage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, BlogPage $blogPage)
    {
        $this->authorize('view', $blogPage);

        return view('app.blog_pages.show', compact('blogPage'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\BlogPage $blogPage
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, BlogPage $blogPage)
    {
        $this->authorize('update', $blogPage);

        return view('app.blog_pages.edit', compact('blogPage'));
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

        return redirect()
            ->route('blog-pages.edit', $blogPage)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('blog-pages.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
