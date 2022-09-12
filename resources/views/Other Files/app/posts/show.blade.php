@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('posts.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.posts.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.posts.inputs.title')</h5>
                    <span>{{ $post->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.posts.inputs.slug')</h5>
                    <span>{{ $post->slug ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.posts.inputs.small_description')</h5>
                    <span>{{ $post->small_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.posts.inputs.detail_description')</h5>
                    <span>{{ $post->detail_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.posts.inputs.featured_image')</h5>
                    <x-partials.thumbnail
                        src="{{ $post->featured_image ? \Storage::url($post->featured_image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.posts.inputs.meta_title')</h5>
                    <span>{{ $post->meta_title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.posts.inputs.meta_keyword')</h5>
                    <span>{{ $post->meta_keyword ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.posts.inputs.meta_description')</h5>
                    <span>{{ $post->meta_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.posts.inputs.status')</h5>
                    <span>{{ $post->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('posts.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Post::class)
                <a href="{{ route('posts.create') }}" class="btn btn-light">
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

            <livewire:post-galleries-detail :post="$post" />
        </div>
    </div>
    @endcan
</div>
@endsection
