@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('partners.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.partners.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.partners.inputs.title')</h5>
                    <span>{{ $partner->title ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partners.inputs.description')</h5>
                    <span>{{ $partner->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partners.inputs.logo')</h5>
                    <x-partials.thumbnail
                        src="{{ $partner->logo ? \Storage::url($partner->logo) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partners.inputs.website')</h5>
                    <span>{{ $partner->website ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partners.inputs.orderby')</h5>
                    <span>{{ $partner->orderby ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.partners.inputs.status')</h5>
                    <span>{{ $partner->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('partners.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Partner::class)
                <a href="{{ route('partners.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
