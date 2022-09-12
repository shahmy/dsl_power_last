<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ApplianceCategory;
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
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.appliance_categories.index',
            compact('applianceCategories', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', ApplianceCategory::class);

        return view('app.appliance_categories.create');
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

        return redirect()
            ->route('appliance-categories.edit', $applianceCategory)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ApplianceCategory $applianceCategory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ApplianceCategory $applianceCategory)
    {
        $this->authorize('view', $applianceCategory);

        return view(
            'app.appliance_categories.show',
            compact('applianceCategory')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ApplianceCategory $applianceCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ApplianceCategory $applianceCategory)
    {
        $this->authorize('update', $applianceCategory);

        return view(
            'app.appliance_categories.edit',
            compact('applianceCategory')
        );
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

        return redirect()
            ->route('appliance-categories.edit', $applianceCategory)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('appliance-categories.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
