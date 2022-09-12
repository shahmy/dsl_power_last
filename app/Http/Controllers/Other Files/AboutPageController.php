<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AboutPageStoreRequest;
use App\Http\Requests\AboutPageUpdateRequest;

class AboutPageController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', AboutPage::class);

        $search = $request->get('search', '');

        $aboutPages = AboutPage::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.about_pages.index', compact('aboutPages', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', AboutPage::class);

        return view('app.about_pages.create');
    }

    /**
     * @param \App\Http\Requests\AboutPageStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutPageStoreRequest $request)
    {
        $this->authorize('create', AboutPage::class);

        $validated = $request->validated();
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('public');
        }

        if ($request->hasFile('title_bg_image')) {
            $validated['title_bg_image'] = $request
                ->file('title_bg_image')
                ->store('public');
        }

        $aboutPage = AboutPage::create($validated);

        return redirect()
            ->route('about-pages.edit', $aboutPage)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\AboutPage $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, AboutPage $aboutPage)
    {
        $this->authorize('view', $aboutPage);

        return view('app.about_pages.show', compact('aboutPage'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\AboutPage $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, AboutPage $aboutPage)
    {
        $this->authorize('update', $aboutPage);

        return view('app.about_pages.edit', compact('aboutPage'));
    }

    /**
     * @param \App\Http\Requests\AboutPageUpdateRequest $request
     * @param \App\Models\AboutPage $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function update(
        AboutPageUpdateRequest $request,
        AboutPage $aboutPage
    ) {
        $this->authorize('update', $aboutPage);

        $validated = $request->validated();
        if ($request->hasFile('featured_image')) {
            if ($aboutPage->featured_image) {
                Storage::delete($aboutPage->featured_image);
            }

            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('public');
        }

        if ($request->hasFile('title_bg_image')) {
            if ($aboutPage->title_bg_image) {
                Storage::delete($aboutPage->title_bg_image);
            }

            $validated['title_bg_image'] = $request
                ->file('title_bg_image')
                ->store('public');
        }

        $aboutPage->update($validated);

        return redirect()
            ->route('about-pages.edit', $aboutPage)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\AboutPage $aboutPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, AboutPage $aboutPage)
    {
        $this->authorize('delete', $aboutPage);

        if ($aboutPage->featured_image) {
            Storage::delete($aboutPage->featured_image);
        }

        if ($aboutPage->title_bg_image) {
            Storage::delete($aboutPage->title_bg_image);
        }

        $aboutPage->delete();

        return redirect()
            ->route('about-pages.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
