<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeAboutSection;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\HomeAboutSectionStoreRequest;
use App\Http\Requests\HomeAboutSectionUpdateRequest;

class HomeAboutSectionController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', HomeAboutSection::class);

        $search = $request->get('search', '');

        $homeAboutSections = HomeAboutSection::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.home_about_sections.index',
            compact('homeAboutSections', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', HomeAboutSection::class);

        return view('app.home_about_sections.create');
    }

    /**
     * @param \App\Http\Requests\HomeAboutSectionStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeAboutSectionStoreRequest $request)
    {
        $this->authorize('create', HomeAboutSection::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        $homeAboutSection = HomeAboutSection::create($validated);

        return redirect()
            ->route('home-about-sections.edit', $homeAboutSection)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomeAboutSection $homeAboutSection
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, HomeAboutSection $homeAboutSection)
    {
        $this->authorize('view', $homeAboutSection);

        return view(
            'app.home_about_sections.show',
            compact('homeAboutSection')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomeAboutSection $homeAboutSection
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, HomeAboutSection $homeAboutSection)
    {
        $this->authorize('update', $homeAboutSection);

        return view(
            'app.home_about_sections.edit',
            compact('homeAboutSection')
        );
    }

    /**
     * @param \App\Http\Requests\HomeAboutSectionUpdateRequest $request
     * @param \App\Models\HomeAboutSection $homeAboutSection
     * @return \Illuminate\Http\Response
     */
    public function update(
        HomeAboutSectionUpdateRequest $request,
        HomeAboutSection $homeAboutSection
    ) {
        $this->authorize('update', $homeAboutSection);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            if ($homeAboutSection->image) {
                Storage::delete($homeAboutSection->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        $homeAboutSection->update($validated);

        return redirect()
            ->route('home-about-sections.edit', $homeAboutSection)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomeAboutSection $homeAboutSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Request $request,
        HomeAboutSection $homeAboutSection
    ) {
        $this->authorize('delete', $homeAboutSection);

        if ($homeAboutSection->image) {
            Storage::delete($homeAboutSection->image);
        }

        $homeAboutSection->delete();

        return redirect()
            ->route('home-about-sections.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
