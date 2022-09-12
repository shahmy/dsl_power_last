<?php

namespace App\Http\Controllers\Api;

use App\Models\HomeSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\HomeSliderResource;
use App\Http\Resources\HomeSliderCollection;
use App\Http\Requests\HomeSliderStoreRequest;
use App\Http\Requests\HomeSliderUpdateRequest;

class HomeSliderController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', HomeSlider::class);

        $search = $request->get('search', '');

        $homeSliders = HomeSlider::search($search)
            ->latest()
            ->paginate();

        return new HomeSliderCollection($homeSliders);
    }

    /**
     * @param \App\Http\Requests\HomeSliderStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomeSliderStoreRequest $request)
    {
        $this->authorize('create', HomeSlider::class);

        $validated = $request->validated();
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('public');
        }

        $homeSlider = HomeSlider::create($validated);

        return new HomeSliderResource($homeSlider);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomeSlider $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, HomeSlider $homeSlider)
    {
        $this->authorize('view', $homeSlider);

        return new HomeSliderResource($homeSlider);
    }

    /**
     * @param \App\Http\Requests\HomeSliderUpdateRequest $request
     * @param \App\Models\HomeSlider $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function update(
        HomeSliderUpdateRequest $request,
        HomeSlider $homeSlider
    ) {
        $this->authorize('update', $homeSlider);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            if ($homeSlider->image) {
                Storage::delete($homeSlider->image);
            }

            $validated['image'] = $request->file('image')->store('public');
        }

        $homeSlider->update($validated);

        return new HomeSliderResource($homeSlider);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomeSlider $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, HomeSlider $homeSlider)
    {
        $this->authorize('delete', $homeSlider);

        if ($homeSlider->image) {
            Storage::delete($homeSlider->image);
        }

        $homeSlider->delete();

        return response()->noContent();
    }
}
