<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ApplianceCategory;
use App\Http\Controllers\Controller;
use App\Http\Resources\ApplianceCategoryResource;
use App\Http\Resources\ApplianceCategoryCollection;
use App\Http\Requests\ApplianceCategoryStoreRequest;
use App\Http\Requests\ApplianceCategoryUpdateRequest;

class ApplianceCategoryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', ApplianceCategory::class);

        $search = $request->get('search', '');

        $applianceCategories = ApplianceCategory::search($search)
            ->latest()
            ->paginate();

        return new ApplianceCategoryCollection($applianceCategories);
    }

    /**
     * @param \App\Http\Requests\ApplianceCategoryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplianceCategoryStoreRequest $request)
    {
        $this->authorize('create', ApplianceCategory::class);

        $validated = $request->validated();

        $applianceCategory = ApplianceCategory::create($validated);

        return new ApplianceCategoryResource($applianceCategory);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ApplianceCategory $applianceCategory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ApplianceCategory $applianceCategory)
    {
        $this->authorize('view', $applianceCategory);

        return new ApplianceCategoryResource($applianceCategory);
    }

    /**
     * @param \App\Http\Requests\ApplianceCategoryUpdateRequest $request
     * @param \App\Models\ApplianceCategory $applianceCategory
     * @return \Illuminate\Http\Response
     */
    public function update(
        ApplianceCategoryUpdateRequest $request,
        ApplianceCategory $applianceCategory
    ) {
        $this->authorize('update', $applianceCategory);

        $validated = $request->validated();

        $applianceCategory->update($validated);

        return new ApplianceCategoryResource($applianceCategory);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ApplianceCategory $applianceCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Request $request,
        ApplianceCategory $applianceCategory
    ) {
        $this->authorize('delete', $applianceCategory);

        $applianceCategory->delete();

        return response()->noContent();
    }
}
