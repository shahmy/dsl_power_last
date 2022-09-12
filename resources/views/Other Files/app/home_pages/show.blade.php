@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('home-pages.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.home_pages.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.home_pages.inputs.name')</h5>
                    <span>{{ $homePage->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.home_pages.inputs.url')</h5>
                    <a target="_blank" href="{{ $homePage->url }}"
                        >{{ $homePage->url ?? '-' }}</a
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.home_pages.inputs.meta_keyword')</h5>
                    <span>{{ $homePage->meta_keyword ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.home_pages.inputs.meta_title')</h5>
                    <span>{{ $homePage->meta_title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.home_pages.inputs.meta_description')</h5>
                    <span>{{ $homePage->meta_description ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('home-pages.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\HomePage::class)
                <a
                    href="{{ route('home-pages.create') }}"
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
