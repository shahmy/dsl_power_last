@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('packages.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.packages.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.packages.inputs.name')</h5>
                    <span>{{ $package->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.packages.inputs.slug')</h5>
                    <span>{{ $package->slug ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.packages.inputs.description')</h5>
                    <span>{{ $package->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.packages.inputs.price')</h5>
                    <span>{{ $package->price ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.packages.inputs.featured_image')</h5>
                    <x-partials.thumbnail
                        src="{{ $package->featured_image ? \Storage::url($package->featured_image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.packages.inputs.title_bg_image')</h5>
                    <x-partials.thumbnail
                        src="{{ $package->title_bg_image ? \Storage::url($package->title_bg_image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.packages.inputs.meta_title')</h5>
                    <span>{{ $package->meta_title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.packages.inputs.meta_keyword')</h5>
                    <span>{{ $package->meta_keyword ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.packages.inputs.meta_description')</h5>
                    <span>{{ $package->meta_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.packages.inputs.status')</h5>
                    <span>{{ $package->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('packages.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Package::class)
                <a href="{{ route('packages.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
