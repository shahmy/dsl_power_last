@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('blog-pages.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.blog_pages.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.blog_pages.inputs.name')</h5>
                    <span>{{ $blogPage->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.blog_pages.inputs.slug')</h5>
                    <span>{{ $blogPage->slug ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.blog_pages.inputs.url')</h5>
                    <a target="_blank" href="{{ $blogPage->url }}"
                        >{{ $blogPage->url ?? '-' }}</a
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.blog_pages.inputs.description')</h5>
                    <span>{{ $blogPage->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.blog_pages.inputs.title_bg_image')</h5>
                    <x-partials.thumbnail
                        src="{{ $blogPage->title_bg_image ? \Storage::url($blogPage->title_bg_image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.blog_pages.inputs.title_description')</h5>
                    <span>{{ $blogPage->title_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.blog_pages.inputs.meta_title')</h5>
                    <span>{{ $blogPage->meta_title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.blog_pages.inputs.meta_keyword')</h5>
                    <span>{{ $blogPage->meta_keyword ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.blog_pages.inputs.meta_description')</h5>
                    <span>{{ $blogPage->meta_description ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('blog-pages.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\BlogPage::class)
                <a
                    href="{{ route('blog-pages.create') }}"
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
