<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            ->paginate(5)
            ->withQueryString();

        return view('app.home_sliders.index', compact('homeSliders', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', HomeSlider::class);

        return view('app.home_sliders.create');
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

        return redirect()
            ->route('home-sliders.edit', $homeSlider)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomeSlider $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, HomeSlider $homeSlider)
    {
        $this->authorize('view', $homeSlider);

        return view('app.home_sliders.show', compact('homeSlider'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomeSlider $homeSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, HomeSlider $homeSlider)
    {
        $this->authorize('update', $homeSlider);

        return view('app.home_sliders.edit', compact('homeSlider'));
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

        return redirect()
            ->route('home-sliders.edit', $homeSlider)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('home-sliders.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
