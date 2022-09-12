<?php

namespace App\Http\Controllers;

use App\Models\PartnerPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.partner_pages.index',
            compact('partnerPages', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', PartnerPage::class);

        return view('app.partner_pages.create');
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

        return redirect()
            ->route('partner-pages.edit', $partnerPage)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PartnerPage $partnerPage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PartnerPage $partnerPage)
    {
        $this->authorize('view', $partnerPage);

        return view('app.partner_pages.show', compact('partnerPage'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PartnerPage $partnerPage
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PartnerPage $partnerPage)
    {
        $this->authorize('update', $partnerPage);

        return view('app.partner_pages.edit', compact('partnerPage'));
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

        return redirect()
            ->route('partner-pages.edit', $partnerPage)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('partner-pages.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
