<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;
use App\Http\Requests\HomePageStoreRequest;
use App\Http\Requests\HomePageUpdateRequest;

class HomePageController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', HomePage::class);

        $search = $request->get('search', '');

        $homePages = HomePage::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view('app.home_pages.index', compact('homePages', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', HomePage::class);

        return view('app.home_pages.create');
    }

    /**
     * @param \App\Http\Requests\HomePageStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(HomePageStoreRequest $request)
    {
        $this->authorize('create', HomePage::class);

        $validated = $request->validated();

        $homePage = HomePage::create($validated);

        return redirect()
            ->route('home-pages.edit', $homePage)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomePage $homePage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, HomePage $homePage)
    {
        $this->authorize('view', $homePage);

        return view('app.home_pages.show', compact('homePage'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomePage $homePage
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, HomePage $homePage)
    {
        $this->authorize('update', $homePage);

        return view('app.home_pages.edit', compact('homePage'));
    }

    /**
     * @param \App\Http\Requests\HomePageUpdateRequest $request
     * @param \App\Models\HomePage $homePage
     * @return \Illuminate\Http\Response
     */
    public function update(HomePageUpdateRequest $request, HomePage $homePage)
    {
        $this->authorize('update', $homePage);

        $validated = $request->validated();

        $homePage->update($validated);

        return redirect()
            ->route('home-pages.edit', $homePage)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomePage $homePage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, HomePage $homePage)
    {
        $this->authorize('delete', $homePage);

        $homePage->delete();

        return redirect()
            ->route('home-pages.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
