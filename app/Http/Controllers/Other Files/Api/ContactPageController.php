<?php

namespace App\Http\Controllers\Api;

use App\Models\ContactPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactPageResource;
use App\Http\Resources\ContactPageCollection;
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
            ->paginate();

        return new ContactPageCollection($contactPages);
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

        return new ContactPageResource($contactPage);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ContactPage $contactPage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ContactPage $contactPage)
    {
        $this->authorize('view', $contactPage);

        return new ContactPageResource($contactPage);
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

        return new ContactPageResource($contactPage);
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

        return response()->noContent();
    }
}
