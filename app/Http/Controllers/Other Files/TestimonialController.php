<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TestimonialStoreRequest;
use App\Http\Requests\TestimonialUpdateRequest;

class TestimonialController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Testimonial::class);

        $search = $request->get('search', '');

        $testimonials = Testimonial::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.testimonials.index',
            compact('testimonials', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Testimonial::class);

        return view('app.testimonials.create');
    }

    /**
     * @param \App\Http\Requests\TestimonialStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialStoreRequest $request)
    {
        $this->authorize('create', Testimonial::class);

        $validated = $request->validated();
        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('public');
        }

        $testimonial = Testimonial::create($validated);

        return redirect()
            ->route('testimonials.edit', $testimonial)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Testimonial $testimonial)
    {
        $this->authorize('view', $testimonial);

        return view('app.testimonials.show', compact('testimonial'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Testimonial $testimonial)
    {
        $this->authorize('update', $testimonial);

        return view('app.testimonials.edit', compact('testimonial'));
    }

    /**
     * @param \App\Http\Requests\TestimonialUpdateRequest $request
     * @param \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(
        TestimonialUpdateRequest $request,
        Testimonial $testimonial
    ) {
        $this->authorize('update', $testimonial);

        $validated = $request->validated();
        if ($request->hasFile('logo')) {
            if ($testimonial->logo) {
                Storage::delete($testimonial->logo);
            }

            $validated['logo'] = $request->file('logo')->store('public');
        }

        $testimonial->update($validated);

        return redirect()
            ->route('testimonials.edit', $testimonial)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Testimonial $testimonial)
    {
        $this->authorize('delete', $testimonial);

        if ($testimonial->logo) {
            Storage::delete($testimonial->logo);
        }

        $testimonial->delete();

        return redirect()
            ->route('testimonials.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
