<?php

namespace App\Http\Controllers\Api;

use App\Models\PartnerPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\PartnerPageResource;
use App\Http\Resources\PartnerPageCollection;
use App\Http\Requests\PartnerPageStoreRequest;
use App\Http\Requests\PartnerPageUpdateRequest;

class PartnerPageController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', PartnerPage::class);

        $search = $request->get('search', '');

        $partnerPages = PartnerPage::search($search)
            ->latest()
            ->paginate();

        return new PartnerPageCollection($partnerPages);
    }

    /**
     * @param \App\Http\Requests\PartnerPageStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerPageStoreRequest $request)
    {
        $this->authorize('create', PartnerPage::class);

        $validated = $request->validated();
        if ($request->hasFile('title_bg_image')) {
            $validated['title_bg_image'] = $request
                ->file('title_bg_image')
                ->store('public');
        }

        $partnerPage = PartnerPage::create($validated);

        return new PartnerPageResource($partnerPage);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PartnerPage $partnerPage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PartnerPage $partnerPage)
    {
        $this->authorize('view', $partnerPage);

        return new PartnerPageResource($partnerPage);
    }

    /**
     * @param \App\Http\Requests\PartnerPageUpdateRequest $request
     * @param \App\Models\PartnerPage $partnerPage
     * @return \Illuminate\Http\Response
     */
    public function update(
        PartnerPageUpdateRequest $request,
        PartnerPage $partnerPage
    ) {
        $this->authorize('update', $partnerPage);

        $validated = $request->validated();

        if ($request->hasFile('title_bg_image')) {
            if ($partnerPage->title_bg_image) {
                Storage::delete($partnerPage->title_bg_image);
            }

            $validated['title_bg_image'] = $request
                ->file('title_bg_image')
                ->store('public');
        }

        $partnerPage->update($validated);

        return new PartnerPageResource($partnerPage);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PartnerPage $partnerPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PartnerPage $partnerPage)
    {
        $this->authorize('delete', $partnerPage);

        if ($partnerPage->title_bg_image) {
            Storage::delete($partnerPage->title_bg_image);
        }

        $partnerPage->delete();

        return response()->noContent();
    }
}
