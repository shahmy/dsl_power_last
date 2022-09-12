@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('partner-pages.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.partner_pages.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.partner_pages.inputs.name')</h5>
                    <span>{{ $partnerPage->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partner_pages.inputs.slug')</h5>
                    <span>{{ $partnerPage->slug ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partner_pages.inputs.url')</h5>
                    <a target="_blank" href="{{ $partnerPage->url }}"
                        >{{ $partnerPage->url ?? '-' }}</a
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.partner_pages.inputs.title_description')
                    </h5>
                    <span>{{ $partnerPage->title_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partner_pages.inputs.description')</h5>
                    <span>{{ $partnerPage->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partner_pages.inputs.title_bg_image')</h5>
                    <x-partials.thumbnail
                        src="{{ $partnerPage->title_bg_image ? \Storage::url($partnerPage->title_bg_image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partner_pages.inputs.meta_title')</h5>
                    <span>{{ $partnerPage->meta_title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partner_pages.inputs.meta_keyword')</h5>
                    <span>{{ $partnerPage->meta_keyword ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partner_pages.inputs.meta_description')</h5>
                    <span>{{ $partnerPage->meta_description ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('partner-pages.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\PartnerPage::class)
                <a
                    href="{{ route('partner-pages.create') }}"
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
