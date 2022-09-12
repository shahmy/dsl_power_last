@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('galleries.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.galleries.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.galleries.inputs.post_id')</h5>
                    <span>{{ optional($gallery->post)->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.galleries.inputs.project_id')</h5>
                    <span>{{ optional($gallery->project)->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.galleries.inputs.product_id')</h5>
                    <span>{{ optional($gallery->product)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.galleries.inputs.name')</h5>
                    <span>{{ $gallery->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.galleries.inputs.description')</h5>
                    <span>{{ $gallery->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.galleries.inputs.status')</h5>
                    <span>{{ $gallery->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('galleries.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Gallery::class)
                <a href="{{ route('galleries.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    @can('view-any', App\Models\Video::class)
    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title w-100 mb-2">Videos</h4>

            <livewire:gallery-videos-detail :gallery="$gallery" />
        </div>
    </div>
    @endcan
</div>
@endsection
