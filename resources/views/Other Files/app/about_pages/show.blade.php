@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('about-pages.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.about_pages.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.about_pages.inputs.name')</h5>
                    <span>{{ $aboutPage->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.about_pages.inputs.slug')</h5>
                    <span>{{ $aboutPage->slug ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.about_pages.inputs.url')</h5>
                    <a target="_blank" href="{{ $aboutPage->url }}"
                        >{{ $aboutPage->url ?? '-' }}</a
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.about_pages.inputs.description')</h5>
                    <span>{{ $aboutPage->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.about_pages.inputs.featured_image')</h5>
                    <x-partials.thumbnail
                        src="{{ $aboutPage->featured_image ? \Storage::url($aboutPage->featured_image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.about_pages.inputs.title_description')</h5>
                    <span>{{ $aboutPage->title_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.about_pages.inputs.title_bg_image')</h5>
                    <x-partials.thumbnail
                        src="{{ $aboutPage->title_bg_image ? \Storage::url($aboutPage->title_bg_image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.about_pages.inputs.meta_title')</h5>
                    <span>{{ $aboutPage->meta_title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.about_pages.inputs.meta_keyword')</h5>
                    <span>{{ $aboutPage->meta_keyword ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.about_pages.inputs.meta_description')</h5>
                    <span>{{ $aboutPage->meta_description ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('about-pages.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\AboutPage::class)
                <a
                    href="{{ route('about-pages.create') }}"
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
