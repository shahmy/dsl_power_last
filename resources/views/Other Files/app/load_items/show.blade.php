@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('load-items.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.load_items.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>
                        @lang('crud.load_items.inputs.appliance_category_id')
                    </h5>
                    <span
                        >{{ optional($loadItem->applianceCategory)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.load_items.inputs.name')</h5>
                    <span>{{ $loadItem->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.load_items.inputs.watts')</h5>
                    <span>{{ $loadItem->watts ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('load-items.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\LoadItem::class)
                <a
                    href="{{ route('load-items.create') }}"
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
