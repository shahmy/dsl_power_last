<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\HomeAboutSection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\HomeAboutSectionResource;
use App\Http\Resources\HomeAboutSectionCollection;
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
            ->paginate();

        return new HomeAboutSectionCollection($homeAboutSections);
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

        return new HomeAboutSectionResource($homeAboutSection);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomeAboutSection $homeAboutSection
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, HomeAboutSection $homeAboutSection)
    {
        $this->authorize('view', $homeAboutSection);

        return new HomeAboutSectionResource($homeAboutSection);
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

        return new HomeAboutSectionResource($homeAboutSection);
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

        return response()->noContent();
    }
}
