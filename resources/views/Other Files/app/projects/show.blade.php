@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('projects.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.projects.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.projects.inputs.title')</h5>
                    <span>{{ $project->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.projects.inputs.slug')</h5>
                    <span>{{ $project->slug ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.projects.inputs.small_description')</h5>
                    <span>{{ $project->small_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.projects.inputs.detail_description')</h5>
                    <span>{{ $project->detail_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.projects.inputs.featured_image')</h5>
                    <x-partials.thumbnail
                        src="{{ $project->featured_image ? \Storage::url($project->featured_image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.projects.inputs.duration')</h5>
                    <span>{{ $project->duration ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.projects.inputs.meta_title')</h5>
                    <span>{{ $project->meta_title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.projects.inputs.meta_keyword')</h5>
                    <span>{{ $project->meta_keyword ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.projects.inputs.meta_description')</h5>
                    <span>{{ $project->meta_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.projects.inputs.status')</h5>
                    <span>{{ $project->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('projects.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Project::class)
                <a href="{{ route('projects.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    @can('view-any', App\Models\Gallery::class)
    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title w-100 mb-2">Galleries</h4>

            <livewire:project-galleries-detail :project="$project" />
        </div>
    </div>
    @endcan
</div>
@endsection
