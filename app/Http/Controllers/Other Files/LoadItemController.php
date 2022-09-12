<?php

namespace App\Http\Controllers;

use App\Models\LoadItem;
use Illuminate\Http\Request;
use App\Models\ApplianceCategory;
use App\Http\Requests\LoadItemStoreRequest;
use App\Http\Requests\LoadItemUpdateRequest;

class LoadItemController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', LoadItem::class);

        $search = $request->get('search', '');

        $loadItems = LoadItem::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.load_items.index', compact('loadItems', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', LoadItem::class);

        $applianceCategories = ApplianceCategory::pluck('name', 'id');

        return view('app.load_items.create', compact('applianceCategories'));
    }

    /**
     * @param \App\Http\Requests\LoadItemStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoadItemStoreRequest $request)
    {
        $this->authorize('create', LoadItem::class);

        $validated = $request->validated();

        $loadItem = LoadItem::create($validated);

        return redirect()
            ->route('load-items.edit', $loadItem)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\LoadItem $loadItem
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, LoadItem $loadItem)
    {
        $this->authorize('view', $loadItem);

        return view('app.load_items.show', compact('loadItem'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\LoadItem $loadItem
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, LoadItem $loadItem)
    {
        $this->authorize('update', $loadItem);

        $applianceCategories = ApplianceCategory::pluck('name', 'id');

        return view(
            'app.load_items.edit',
            compact('loadItem', 'applianceCategories')
        );
    }

    /**
     * @param \App\Http\Requests\LoadItemUpdateRequest $request
     * @param \App\Models\LoadItem $loadItem
     * @return \Illuminate\Http\Response
     */
    public function update(LoadItemUpdateRequest $request, LoadItem $loadItem)
    {
        $this->authorize('update', $loadItem);

        $validated = $request->validated();

        $loadItem->update($validated);

        return redirect()
            ->route('load-items.edit', $loadItem)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\LoadItem $loadItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, LoadItem $loadItem)
    {
        $this->authorize('delete', $loadItem);

        $loadItem->delete();

        return redirect()
            ->route('load-items.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
