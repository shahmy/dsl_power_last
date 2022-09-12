@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">
                    @lang('crud.partner_pages.index_title')
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
                        @can('create', App\Models\PartnerPage::class)
                        <a
                            href="{{ route('partner-pages.create') }}"
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
                                @lang('crud.partner_pages.inputs.name')
                            </th>
                            <th class="text-left">
                                @lang('crud.partner_pages.inputs.slug')
                            </th>
                            <th class="text-left">
                                @lang('crud.partner_pages.inputs.url')
                            </th>
                            <th class="text-left">
                                @lang('crud.partner_pages.inputs.title_description')
                            </th>
                            <th class="text-left">
                                @lang('crud.partner_pages.inputs.description')
                            </th>
                            <th class="text-left">
                                @lang('crud.partner_pages.inputs.title_bg_image')
                            </th>
                            <th class="text-left">
                                @lang('crud.partner_pages.inputs.meta_title')
                            </th>
                            <th class="text-left">
                                @lang('crud.partner_pages.inputs.meta_keyword')
                            </th>
                            <th class="text-left">
                                @lang('crud.partner_pages.inputs.meta_description')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($partnerPages as $partnerPage)
                        <tr>
                            <td>{{ $partnerPage->name ?? '-' }}</td>
                            <td>{{ $partnerPage->slug ?? '-' }}</td>
                            <td>
                                <a
                                    target="_blank"
                                    href="{{ $partnerPage->url }}"
                                    >{{ $partnerPage->url ?? '-' }}</a
                                >
                            </td>
                            <td>
                                {{ $partnerPage->title_description ?? '-' }}
                            </td>
                            <td>{{ $partnerPage->description ?? '-' }}</td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $partnerPage->title_bg_image ? \Storage::url($partnerPage->title_bg_image) : '' }}"
                                />
                            </td>
                            <td>{{ $partnerPage->meta_title ?? '-' }}</td>
                            <td>{{ $partnerPage->meta_keyword ?? '-' }}</td>
                            <td>{{ $partnerPage->meta_description ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $partnerPage)
                                    <a
                                        href="{{ route('partner-pages.edit', $partnerPage) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $partnerPage)
                                    <a
                                        href="{{ route('partner-pages.show', $partnerPage) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $partnerPage)
                                    <form
                                        action="{{ route('partner-pages.destroy', $partnerPage) }}"
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
                            <td colspan="10">
                                {!! $partnerPages->render() !!}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
