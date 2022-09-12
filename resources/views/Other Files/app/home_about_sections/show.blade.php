@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('home-about-sections.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.home_about_sections.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.home_about_sections.inputs.heading')</h5>
                    <span>{{ $homeAboutSection->heading ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.home_about_sections.inputs.sub_heading')
                    </h5>
                    <span>{{ $homeAboutSection->sub_heading ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.home_about_sections.inputs.description')
                    </h5>
                    <span>{{ $homeAboutSection->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.home_about_sections.inputs.image')</h5>
                    <x-partials.thumbnail
                        src="{{ $homeAboutSection->image ? \Storage::url($homeAboutSection->image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.home_about_sections.inputs.image_title')
                    </h5>
                    <span>{{ $homeAboutSection->image_title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.home_about_sections.inputs.button_name')
                    </h5>
                    <span>{{ $homeAboutSection->button_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.home_about_sections.inputs.button_link')
                    </h5>
                    <span>{{ $homeAboutSection->button_link ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('home-about-sections.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\HomeAboutSection::class)
                <a
                    href="{{ route('home-about-sections.create') }}"
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
