@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('home-sliders.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.home_sliders.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.home_sliders.inputs.title')</h5>
                    <span>{{ $homeSlider->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.home_sliders.inputs.description')</h5>
                    <span>{{ $homeSlider->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.home_sliders.inputs.image')</h5>
                    <x-partials.thumbnail
                        src="{{ $homeSlider->image ? \Storage::url($homeSlider->image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.home_sliders.inputs.button_name')</h5>
                    <span>{{ $homeSlider->button_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.home_sliders.inputs.button_url')</h5>
                    <span>{{ $homeSlider->button_url ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.home_sliders.inputs.video_url')</h5>
                    <span>{{ $homeSlider->video_url ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.home_sliders.inputs.status')</h5>
                    <span>{{ $homeSlider->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('home-sliders.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\HomeSlider::class)
                <a
                    href="{{ route('home-sliders.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
