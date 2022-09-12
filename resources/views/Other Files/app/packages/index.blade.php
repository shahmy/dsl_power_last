@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">@lang('crud.packages.index_title')</h4>
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
                        @can('create', App\Models\Package::class)
                        <a
                            href="{{ route('packages.create') }}"
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
                                @lang('crud.packages.inputs.name')
                            </th>
                            <th class="text-left">
                                @lang('crud.packages.inputs.slug')
                            </th>
                            <th class="text-left">
                                @lang('crud.packages.inputs.description')
                            </th>
                            <th class="text-right">
                                @lang('crud.packages.inputs.price')
                            </th>
                            <th class="text-left">
                                @lang('crud.packages.inputs.featured_image')
                            </th>
                            <th class="text-left">
                                @lang('crud.packages.inputs.title_bg_image')
                            </th>
                            <th class="text-left">
                                @lang('crud.packages.inputs.meta_title')
                            </th>
                            <th class="text-left">
                                @lang('crud.packages.inputs.meta_keyword')
                            </th>
                            <th class="text-left">
                                @lang('crud.packages.inputs.meta_description')
                            </th>
                            <th class="text-left">
                                @lang('crud.packages.inputs.status')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($packages as $package)
                        <tr>
                            <td>{{ $package->name ?? '-' }}</td>
                            <td>{{ $package->slug ?? '-' }}</td>
                            <td>{{ $package->description ?? '-' }}</td>
                            <td>{{ $package->price ?? '-' }}</td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $package->featured_image ? \Storage::url($package->featured_image) : '' }}"
                                />
                            </td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $package->title_bg_image ? \Storage::url($package->title_bg_image) : '' }}"
                                />
                            </td>
                            <td>{{ $package->meta_title ?? '-' }}</td>
                            <td>{{ $package->meta_keyword ?? '-' }}</td>
                            <td>{{ $package->meta_description ?? '-' }}</td>
                            <td>{{ $package->status ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $package)
                                    <a
                                        href="{{ route('packages.edit', $package) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $package)
                                    <a
                                        href="{{ route('packages.show', $package) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $package)
                                    <form
                                        action="{{ route('packages.destroy', $package) }}"
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
                            <td colspan="11">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="11">{!! $packages->render() !!}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
