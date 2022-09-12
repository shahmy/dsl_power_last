<?php

namespace App\Http\Controllers\Api;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\TestimonialResource;
use App\Http\Resources\TestimonialCollection;
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
            ->paginate();

        return new TestimonialCollection($testimonials);
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

        return new TestimonialResource($testimonial);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Testimonial $testimonial)
    {
        $this->authorize('view', $testimonial);

        return new TestimonialResource($testimonial);
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

        return new TestimonialResource($testimonial);
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

        return response()->noContent();
    }
}
