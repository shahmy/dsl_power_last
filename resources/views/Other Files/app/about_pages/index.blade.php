@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">
                    @lang('crud.about_pages.index_title')
                </h4>
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
                        @can('create', App\Models\AboutPage::class)
                        <a
                            href="{{ route('about-pages.create') }}"
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
                                @lang('crud.about_pages.inputs.name')
                            </th>
                            <th class="text-left">
                                @lang('crud.about_pages.inputs.slug')
                            </th>
                            <th class="text-left">
                                @lang('crud.about_pages.inputs.url')
                            </th>
                            <th class="text-left">
                                @lang('crud.about_pages.inputs.description')
                            </th>
                            <th class="text-left">
                                @lang('crud.about_pages.inputs.featured_image')
                            </th>
                            <th class="text-left">
                                @lang('crud.about_pages.inputs.title_description')
                            </th>
                            <th class="text-left">
                                @lang('crud.about_pages.inputs.title_bg_image')
                            </th>
                            <th class="text-left">
                                @lang('crud.about_pages.inputs.meta_title')
                            </th>
                            <th class="text-left">
                                @lang('crud.about_pages.inputs.meta_keyword')
                            </th>
                            <th class="text-left">
                                @lang('crud.about_pages.inputs.meta_description')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($aboutPages as $aboutPage)
                        <tr>
                            <td>{{ $aboutPage->name ?? '-' }}</td>
                            <td>{{ $aboutPage->slug ?? '-' }}</td>
                            <td>
                                <a target="_blank" href="{{ $aboutPage->url }}"
                                    >{{ $aboutPage->url ?? '-' }}</a
                                >
                            </td>
                            <td>{{ $aboutPage->description ?? '-' }}</td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $aboutPage->featured_image ? \Storage::url($aboutPage->featured_image) : '' }}"
                                />
                            </td>
                            <td>{{ $aboutPage->title_description ?? '-' }}</td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $aboutPage->title_bg_image ? \Storage::url($aboutPage->title_bg_image) : '' }}"
                                />
                            </td>
                            <td>{{ $aboutPage->meta_title ?? '-' }}</td>
                            <td>{{ $aboutPage->meta_keyword ?? '-' }}</td>
                            <td>{{ $aboutPage->meta_description ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $aboutPage)
                                    <a
                                        href="{{ route('about-pages.edit', $aboutPage) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $aboutPage)
                                    <a
                                        href="{{ route('about-pages.show', $aboutPage) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $aboutPage)
                                    <form
                                        action="{{ route('about-pages.destroy', $aboutPage) }}"
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
                            <td colspan="11">{!! $aboutPages->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
