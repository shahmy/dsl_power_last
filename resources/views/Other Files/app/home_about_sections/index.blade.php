@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">
                    @lang('crud.home_about_sections.index_title')
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
                        @can('create', App\Models\HomeAboutSection::class)
                        <a
                            href="{{ route('home-about-sections.create') }}"
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
                                @lang('crud.home_about_sections.inputs.heading')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_about_sections.inputs.sub_heading')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_about_sections.inputs.description')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_about_sections.inputs.image')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_about_sections.inputs.image_title')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_about_sections.inputs.button_name')
                            </th>
                            <th class="text-left">
                                @lang('crud.home_about_sections.inputs.button_link')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($homeAboutSections as $homeAboutSection)
                        <tr>
                            <td>{{ $homeAboutSection->heading ?? '-' }}</td>
                            <td>{{ $homeAboutSection->sub_heading ?? '-' }}</td>
                            <td>{{ $homeAboutSection->description ?? '-' }}</td>
                            <td>
                                <x-partials.thumbnail
                                    src="{{ $homeAboutSection->image ? \Storage::url($homeAboutSection->image) : '' }}"
                                />
                            </td>
                            <td>{{ $homeAboutSection->image_title ?? '-' }}</td>
                            <td>{{ $homeAboutSection->button_name ?? '-' }}</td>
                            <td>{{ $homeAboutSection->button_link ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $homeAboutSection)
                                    <a
                                        href="{{ route('home-about-sections.edit', $homeAboutSection) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $homeAboutSection)
                                    <a
                                        href="{{ route('home-about-sections.show', $homeAboutSection) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $homeAboutSection)
                                    <form
                                        action="{{ route('home-about-sections.destroy', $homeAboutSection) }}"
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
                            <td colspan="8">
                                {!! $homeAboutSections->render() !!}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
