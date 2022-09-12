<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ApplianceCategory;
use App\Http\Controllers\Controller;
use App\Http\Resources\LoadItemResource;
use App\Http\Resources\LoadItemCollection;

class ApplianceCategoryLoadItemsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ApplianceCategory $applianceCategory
     * @return \Illuminate\Http\Response
     */
    public function index(
        Request $request,
        ApplianceCategory $applianceCategory
    ) {
        $this->authorize('view', $applianceCategory);

        $search = $request->get('search', '');

        $loadItems = $applianceCategory
            ->loadItems()
            ->search($search)
            ->latest()
            ->paginate();

        return new LoadItemCollection($loadItems);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ApplianceCategory $applianceCategory
     * @return \Illuminate\Http\Response
     */
    public function store(
        Request $request,
        ApplianceCategory $applianceCategory
    ) {
        $this->authorize('create', LoadItem::class);

        $validated = $request->validate([
            'name' => ['required', 'string'],
            'watts' => ['required', 'numeric'],
        ]);

        $loadItem = $applianceCategory->loadItems()->create($validated);

        return new LoadItemResource($loadItem);
    }
}
