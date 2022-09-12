<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use Illuminate\Http\Request;
use App\Http\Requests\ContactPageStoreRequest;
use App\Http\Requests\ContactPageUpdateRequest;

class ContactPageController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', ContactPage::class);

        $search = $request->get('search', '');

        $contactPages = ContactPage::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.contact_pages.index',
            compact('contactPages', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', ContactPage::class);

        return view('app.contact_pages.create');
    }

    /**
     * @param \App\Http\Requests\ContactPageStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactPageStoreRequest $request)
    {
        $this->authorize('create', ContactPage::class);

        $validated = $request->validated();

        $contactPage = ContactPage::create($validated);

        return redirect()
            ->route('contact-pages.edit', $contactPage)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ContactPage $contactPage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ContactPage $contactPage)
    {
        $this->authorize('view', $contactPage);

        return view('app.contact_pages.show', compact('contactPage'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ContactPage $contactPage
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ContactPage $contactPage)
    {
        $this->authorize('update', $contactPage);

        return view('app.contact_pages.edit', compact('contactPage'));
    }

    /**
     * @param \App\Http\Requests\ContactPageUpdateRequest $request
     * @param \App\Models\ContactPage $contactPage
     * @return \Illuminate\Http\Response
     */
    public function update(
        ContactPageUpdateRequest $request,
        ContactPage $contactPage
    ) {
        $this->authorize('update', $contactPage);

        $validated = $request->validated();

        $contactPage->update($validated);

        return redirect()
            ->route('contact-pages.edit', $contactPage)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ContactPage $contactPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ContactPage $contactPage)
    {
        $this->authorize('delete', $contactPage);

        $contactPage->delete();

        return redirect()
            ->route('contact-pages.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
