<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\ProjectCollection;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectUpdateRequest;

class ProjectController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Project::class);

        $search = $request->get('search', '');

        $projects = Project::search($search)
            ->latest()
            ->paginate();

        return new ProjectCollection($projects);
    }

    /**
     * @param \App\Http\Requests\ProjectStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectStoreRequest $request)
    {
        $this->authorize('create', Project::class);

        $validated = $request->validated();
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('public');
        }

        $project = Project::create($validated);

        return new ProjectResource($project);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Project $project)
    {
        $this->authorize('view', $project);

        return new ProjectResource($project);
    }

    /**
     * @param \App\Http\Requests\ProjectUpdateRequest $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectUpdateRequest $request, Project $project)
    {
        $this->authorize('update', $project);

        $validated = $request->validated();

        if ($request->hasFile('featured_image')) {
            if ($project->featured_image) {
                Storage::delete($project->featured_image);
            }

            $validated['featured_image'] = $request
                ->file('featured_image')
                ->store('public');
        }

        $project->update($validated);

        return new ProjectResource($project);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Project $project)
    {
        $this->authorize('delete', $project);

        if ($project->featured_image) {
            Storage::delete($project->featured_image);
        }

        $project->delete();

        return response()->noContent();
    }
}
