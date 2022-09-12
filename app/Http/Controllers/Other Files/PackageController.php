<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\PackageStoreRequest;
use App\Http\Requests\PackageUpdateRequest;

class PackageController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Package::class);

        $search = $request->get('search', '');

        $packages = Package::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.packages.index', compact('packages', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Package::class);

        return view('app.packages.create');
    }

    /**
     * @param \App\Http\Requests\PackageStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageStoreRequest $request)
    {
        $this->authorize('create', Package::class);

        $validated = $request->validated();
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('public');
        }

        if ($request->hasFile('title_bg_image')) {
            $validated['title_bg_image'] = $request
                ->file('title_bg_image')
                ->store('public');
        }

        $package = Package::create($validated);

        return redirect()
            ->route('packages.edit', $package)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Package $package
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Package $package)
    {
        $this->authorize('view', $package);

        return view('app.packages.show', compact('package'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Package $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Package $package)
    {
        $this->authorize('update', $package);

        return view('app.packages.edit', compact('package'));
    }

    /**
     * @param \App\Http\Requests\PackageUpdateRequest $request
     * @param \App\Models\Package $package
     * @return \Illuminate\Http\Response
     */
    public function update(PackageUpdateRequest $request, Package $package)
    {
        $this->authorize('update', $package);

        $validated = $request->validated();
        if ($request->hasFile('featured_image')) {
            if ($package->featured_image) {
                Storage::delete($package->featured_image);
            }

            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('public');
        }

        if ($request->hasFile('title_bg_image')) {
            if ($package->title_bg_image) {
                Storage::delete($package->title_bg_image);
            }

            $validated['title_bg_image'] = $request
                ->file('title_bg_image')
                ->store('public');
        }

        $package->update($validated);

        return redirect()
            ->route('packages.edit', $package)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Package $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Package $package)
    {
        $this->authorize('delete', $package);

        if ($package->featured_image) {
            Storage::delete($package->featured_image);
        }

        if ($package->title_bg_image) {
            Storage::delete($package->title_bg_image);
        }

        $package->delete();

        return redirect()
            ->route('packages.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
