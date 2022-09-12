<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
            ->paginate(5)
            ->withQueryString();

        return view('app.projects.index', compact('projects', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Project::class);

        return view('app.projects.create');
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

        return redirect()
            ->route('projects.edit', $project)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Project $project)
    {
        $this->authorize('view', $project);

        return view('app.projects.show', compact('project'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Project $project)
    {
        $this->authorize('update', $project);

        return view('app.projects.edit', compact('project'));
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

        return redirect()
            ->route('projects.edit', $project)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('projects.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
