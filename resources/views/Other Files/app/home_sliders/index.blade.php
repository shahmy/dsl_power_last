@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">
                    @lang('crud.home_sliders.index_title')
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
                        @can('create', App\Models\HomeSlider::class)
                        <a
                            href="{{ route('home-sliders.create') }}"
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
                                @lang('crud.home_sliders.inputs.title')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_sliders.inputs.description')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_sliders.inputs.image')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_sliders.inputs.button_name')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_sliders.inputs.button_url')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_sliders.inputs.video_url')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_sliders.inputs.status')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($homeSliders as $homeSlider)
                        <tr>
                            <td>{{ $homeSlider->title ?? '-' }}</td>
                            <td>{{ $homeSlider->description ?? '-' }}</td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $homeSlider->image ? \Storage::url($homeSlider->image) : '' }}"
                                />
                            </td>
                            <td>{{ $homeSlider->button_name ?? '-' }}</td>
                            <td>{{ $homeSlider->button_url ?? '-' }}</td>
                            <td>{{ $homeSlider->video_url ?? '-' }}</td>
                            <td>{{ $homeSlider->status ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $homeSlider)
                                    <a
                                        href="{{ route('home-sliders.edit', $homeSlider) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $homeSlider)
                                    <a
                                        href="{{ route('home-sliders.show', $homeSlider) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $homeSlider)
                                    <form
                                        action="{{ route('home-sliders.destroy', $homeSlider) }}"
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
                            <td colspan="8">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="8">{!! $homeSliders->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
