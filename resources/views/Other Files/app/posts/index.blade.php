@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.posts.index_title')</h4>
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
                        @can('create', App\Models\Post::class)
                        <a
                            href="{{ route('posts.create') }}"
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
                                @lang('crud.posts.inputs.title')
                            </th>
                            <th class="text-left">
                                @lang('crud.posts.inputs.slug')
                            </th>
                            <th class="text-left">
                                @lang('crud.posts.inputs.small_description')
                            </th>
                            <th class="text-left">
                                @lang('crud.posts.inputs.detail_description')
                            </th>
                            <th class="text-left">
                                @lang('crud.posts.inputs.featured_image')
                            </th>
                            <th class="text-left">
                                @lang('crud.posts.inputs.meta_title')
                            </th>
                            <th class="text-left">
                                @lang('crud.posts.inputs.meta_keyword')
                            </th>
                            <th class="text-left">
                                @lang('crud.posts.inputs.meta_description')
                            </th>
                            <th class="text-left">
                                @lang('crud.posts.inputs.status')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($posts as $post)
                        <tr>
                            <td>{{ $post->title ?? '-' }}</td>
                            <td>{{ $post->slug ?? '-' }}</td>
                            <td>{{ $post->small_description ?? '-' }}</td>
                            <td>{{ $post->detail_description ?? '-' }}</td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $post->featured_image ? \Storage::url($post->featured_image) : '' }}"
                                />
                            </td>
                            <td>{{ $post->meta_title ?? '-' }}</td>
                            <td>{{ $post->meta_keyword ?? '-' }}</td>
                            <td>{{ $post->meta_description ?? '-' }}</td>
                            <td>{{ $post->status ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $post)
                                    <a href="{{ route('posts.edit', $post) }}">
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $post)
                                    <a href="{{ route('posts.show', $post) }}">
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $post)
                                    <form
                                        action="{{ route('posts.destroy', $post) }}"
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
                            <td colspan="10">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="10">{!! $posts->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
