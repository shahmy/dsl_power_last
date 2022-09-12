<?php

namespace App\Http\Controllers\Api;

use App\Models\LoadItem;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\LoadItemResource;
use App\Http\Resources\LoadItemCollection;
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
            ->paginate();

        return new LoadItemCollection($loadItems);
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

        return new LoadItemResource($loadItem);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\LoadItem $loadItem
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, LoadItem $loadItem)
    {
        $this->authorize('view', $loadItem);

        return new LoadItemResource($loadItem);
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

        return new LoadItemResource($loadItem);
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

        return response()->noContent();
    }
}
