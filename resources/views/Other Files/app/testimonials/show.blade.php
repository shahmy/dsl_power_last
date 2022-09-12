@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('testimonials.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.testimonials.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.testimonials.inputs.name')</h5>
                    <span>{{ $testimonial->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.testimonials.inputs.company_name')</h5>
                    <span>{{ $testimonial->company_name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.testimonials.inputs.description')</h5>
                    <span>{{ $testimonial->description ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.testimonials.inputs.logo')</h5>
                    <x-partials.thumbnail
                        src="{{ $testimonial->logo ? \Storage::url($testimonial->logo) : '' }}"
                        size="150"
                    />
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('testimonials.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Testimonial::class)
                <a
                    href="{{ route('testimonials.create') }}"
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
