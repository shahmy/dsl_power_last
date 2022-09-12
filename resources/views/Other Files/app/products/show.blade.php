@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('products.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.products.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.products.inputs.product_category_id')</h5>
                    <span
                        >{{ optional($product->productCategory)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.products.inputs.name')</h5>
                    <span>{{ $product->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.products.inputs.small_description')</h5>
                    <span>{{ $product->small_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.products.inputs.detail_description')</h5>
                    <span>{{ $product->detail_description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.products.inputs.featured_image')</h5>
                    <x-partials.thumbnail
                        src="{{ $product->featured_image ? \Storage::url($product->featured_image) : '' }}"
                        size="150"
                    />
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.products.inputs.status')</h5>
                    <span>{{ $product->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('products.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Product::class)
                <a href="{{ route('products.create') }}" class="btn btn-light">
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

            <livewire:product-galleries-detail :product="$product" />
        </div>
    </div>
    @endcan
</div>
@endsection
