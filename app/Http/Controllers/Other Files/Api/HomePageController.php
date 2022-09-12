<?php

namespace App\Http\Controllers\Api;

use App\Models\HomePage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\HomePageResource;
use App\Http\Resources\HomePageCollection;
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
            ->paginate();

        return new HomePageCollection($homePages);
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

        return new HomePageResource($homePage);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HomePage $homePage
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, HomePage $homePage)
    {
        $this->authorize('view', $homePage);

        return new HomePageResource($homePage);
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

        return new HomePageResource($homePage);
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

        return response()->noContent();
    }
}
