@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('galleries.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.galleries.edit_title')
            </h4>

            <x-form
                method="PUT"
                action="{{ route('galleries.update', $gallery) }}"
                class="mt-4"
            >
                @include('app.galleries.form-inputs')

                <div class="mt-4">
                    <a
                        href="{{ route('galleries.index') }}"
                        class="btn btn-light"
                    >
                        <i class="icon ion-md-return-left text-primary"></i>
                        @lang('crud.common.back')
                    </a>

                    <a
                        href="{{ route('galleries.create') }}"
                        class="btn btn-light"
                    >
                        <i class="icon ion-md-add text-primary"></i>
                        @lang('crud.common.create')
                    </a>

                    <button type="submit" class="btn btn-primary float-right">
                        <i class="icon ion-md-save"></i>
                        @lang('crud.common.update')
                    </button>
                </div>
            </x-form>
        </div>
    </div>

    @can('view-any', App\Models\Photo::class)
    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title w-100 mb-2">Photos</h4>

            <livewire:gallery-photos-detail :gallery="$gallery" />
        </div>
    </div>
    @endcan @can('view-any', App\Models\Video::class)
    <div class="card mt-4">
        <div class="card-body">
            <h4 class="card-title w-100 mb-2">Videos</h4>

            <livewire:gallery-videos-detail :gallery="$gallery" />
        </div>
    </div>
    @endcan
</div>
@endsection
