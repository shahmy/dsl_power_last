<div>
    <div class="mb-4">
        @can('create', App\Models\Gallery::class)
        <button class="btn btn-primary" wire:click="newGallery">
            <i class="icon ion-md-add"></i>
            @lang('crud.common.new')
        </button>
        @endcan @can('delete-any', App\Models\Gallery::class)
        <button
            class="btn btn-danger"
             {{ empty($selected) ? 'disabled' : '' }} 
            onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"
            wire:click="destroySelected"
        >
            <i class="icon ion-md-trash"></i>
            @lang('crud.common.delete_selected')
        </button>
        @endcan
    </div>

    <x-modal id="product-galleries-modal" wire:model="showingModal">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ $modalTitle }}</h5>
                <button
                    type="button"
                    class="close"
                    data-dismiss="modal"
                    aria-label="Close"
                >
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <div>
                    <x-inputs.group class="col-sm-12">
                        <x-inputs.select
                            name="gallery.post_id"
                            label="Post"
                            wire:model="gallery.post_id"
                        >
                            <option value="null" disabled>Please select the Post</option>
                            @foreach($postsForSelect as $value => $label)
                            <option value="{{ $value }}"  >{{ $label }}</option>
                            @endforeach
                        </x-inputs.select>
                    </x-inputs.group>

                    <x-inputs.group class="col-sm-12">
                        <x-inputs.select
                            name="gallery.project_id"
                            label="Project"
                            wire:model="gallery.project_id"
                        >
                            <option value="null" disabled>Please select the Project</option>
                            @foreach($projectsForSelect as $value => $label)
                            <option value="{{ $value }}"  >{{ $label }}</option>
                            @endforeach
                        </x-inputs.select>
                    </x-inputs.group>

                    <x-inputs.group class="col-sm-12">
                        <x-inputs.text
                            name="gallery.name"
                            label="Name"
                            wire:model="gallery.name"
                            placeholder="Name"
                        ></x-inputs.text>
                    </x-inputs.group>

                    <x-inputs.group class="col-sm-12">
                        <x-inputs.textarea
                            name="gallery.description"
                            label="Description"
                            wire:model="gallery.description"
                        ></x-inputs.textarea>
                    </x-inputs.group>

                    <x-inputs.group class="col-sm-12">
                        <x-inputs.checkbox
                            name="gallery.status"
                            label="Status"
                            wire:model="gallery.status"
                        ></x-inputs.checkbox>
                    </x-inputs.group>
                </div>
            </div>

            @if($editing) @endif

            <div class="modal-footer">
                <button
                    type="button"
                    class="btn btn-light float-left"
                    wire:click="$toggle('showingModal')"
                >
                    <i class="icon ion-md-close"></i>
                    @lang('crud.common.cancel')
                </button>

                <button type="button" class="btn btn-primary" wire:click="save">
                    <i class="icon ion-md-save"></i>
                    @lang('crud.common.save')
                </button>
            </div>
        </div>
    </x-modal>

    <div class="table-responsive">
        <table class="table table-borderless table-hover">
            <thead>
                <tr>
                    <th>
                        <input
                            type="checkbox"
                            wire:model="allSelected"
                            wire:click="toggleFullSelection"
                            title="{{ trans('crud.common.select_all') }}"
                        />
                    </th>
                    <th class="text-left">
                        @lang('crud.product_galleries.inputs.post_id')
                    </th>
                    <th class="text-left">
                        @lang('crud.product_galleries.inputs.project_id')
                    </th>
                    <th class="text-left">
                        @lang('crud.product_galleries.inputs.name')
                    </th>
                    <th class="text-left">
                        @lang('crud.product_galleries.inputs.description')
                    </th>
                    <th class="text-left">
                        @lang('crud.product_galleries.inputs.status')
                    </th>
                    <th></th>
                </tr>
            </thead>
            <tbody class="text-gray-600">
                @foreach ($galleries as $gallery)
                <tr class="hover:bg-gray-100">
                    <td class="text-left">
                        <input
                            type="checkbox"
                            value="{{ $gallery->id }}"
                            wire:model="selected"
                        />
                    </td>
                    <td class="text-left">
                        {{ optional($gallery->post)->title ?? '-' }}
                    </td>
                    <td class="text-left">
                        {{ optional($gallery->project)->title ?? '-' }}
                    </td>
                    <td class="text-left">{{ $gallery->name ?? '-' }}</td>
                    <td class="text-left">
                        {{ $gallery->description ?? '-' }}
                    </td>
                    <td class="text-left">{{ $gallery->status ?? '-' }}</td>
                    <td class="text-right" style="width: 134px;">
                        <div
                            role="group"
                            aria-label="Row Actions"
                            class="relative inline-flex align-middle"
                        >
                            @can('update', $gallery)
                            <button
                                type="button"
                                class="btn btn-light"
                                wire:click="editGallery({{ $gallery->id }})"
                            >
                                <i class="icon ion-md-create"></i>
                            </button>
                            @endcan
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">{{ $galleries->render() }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
