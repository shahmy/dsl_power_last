@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('contact-pages.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.contact_pages.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.contact_pages.inputs.name')</h5>
                    <span>{{ $contactPage->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.contact_pages.inputs.google_map')</h5>
                    <span>{{ $contactPage->google_map ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.contact_pages.inputs.meta_title')</h5>
                    <span>{{ $contactPage->meta_title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.contact_pages.inputs.meta_keyword')</h5>
                    <span>{{ $contactPage->meta_keyword ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.contact_pages.inputs.meta_description')</h5>
                    <span>{{ $contactPage->meta_description ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('contact-pages.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\ContactPage::class)
                <a
                    href="{{ route('contact-pages.create') }}"
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
