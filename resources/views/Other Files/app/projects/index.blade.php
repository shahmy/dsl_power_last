@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.projects.index_title')</h4>
            </div>

            <div class="searchbar mt-4 mb-5">
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="input-group">
                                <input
                                    id="indexSearch"
                                    type="text"
                                    name="search"
                                    placeholder="{{ __('crud.common.search') }}"
                                    value="{{ $search ?? '' }}"
                                    class="form-control"
                                    autocomplete="off"
                                />
                                <div class="input-group-append">
                                    <button
                                        type="submit"
                                        class="btn btn-primary"
                                    >
                                        <i class="icon ion-md-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 text-right">
                        @can('create', App\Models\Project::class)
                        <a
                            href="{{ route('projects.create') }}"
                            class="btn btn-primary"
                        >
                            <i class="icon ion-md-add"></i>
                            @lang('crud.common.create')
                        </a>
                        @endcan
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.projects.inputs.title')
                            </th>
                            <th class="text-left">
                                @lang('crud.projects.inputs.slug')
                            </th>
                            <th class="text-left">
                                @lang('crud.projects.inputs.small_description')
                            </th>
                            <th class="text-left">
                                @lang('crud.projects.inputs.detail_description')
                            </th>
                            <th class="text-left">
                                @lang('crud.projects.inputs.featured_image')
                            </th>
                            <th class="text-left">
                                @lang('crud.projects.inputs.duration')
                            </th>
                            <th class="text-left">
                                @lang('crud.projects.inputs.meta_title')
                            </th>
                            <th class="text-left">
                                @lang('crud.projects.inputs.meta_keyword')
                            </th>
                            <th class="text-left">
                                @lang('crud.projects.inputs.meta_description')
                            </th>
                            <th class="text-left">
                                @lang('crud.projects.inputs.status')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($projects as $project)
                        <tr>
                            <td>{{ $project->title ?? '-' }}</td>
                            <td>{{ $project->slug ?? '-' }}</td>
                            <td>{{ $project->small_description ?? '-' }}</td>
                            <td>{{ $project->detail_description ?? '-' }}</td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $project->featured_image ? \Storage::url($project->featured_image) : '' }}"
                                />
                            </td>
                            <td>{{ $project->duration ?? '-' }}</td>
                            <td>{{ $project->meta_title ?? '-' }}</td>
                            <td>{{ $project->meta_keyword ?? '-' }}</td>
                            <td>{{ $project->meta_description ?? '-' }}</td>
                            <td>{{ $project->status ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $project)
                                    <a
                                        href="{{ route('projects.edit', $project) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $project)
                                    <a
                                        href="{{ route('projects.show', $project) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $project)
                                    <form
                                        action="{{ route('projects.destroy', $project) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="11">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="11">{!! $projects->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
