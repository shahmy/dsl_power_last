@php $editing = isset($homeAboutSection) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="heading"
            label="Heading"
            value="{{ old('heading', ($editing ? $homeAboutSection->heading : '')) }}"
            placeholder="Heading"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="sub_heading"
            label="Sub Heading"
            value="{{ old('sub_heading', ($editing ? $homeAboutSection->sub_heading : '')) }}"
            placeholder="Sub Heading"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="description" label="Description" required
            >{{ old('description', ($editing ? $homeAboutSection->description :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $homeAboutSection->image ? \Storage::url($homeAboutSection->image) : '' }}')"
        >
            <x-inputs.partials.label
                name="image"
                label="Image"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="image"
                    id="image"
                    @change="fileChosen"
                />
            </div>

            @error('image') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="image_title"
            label="Image Title"
            value="{{ old('image_title', ($editing ? $homeAboutSection->image_title : '')) }}"
            placeholder="Image Title"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="button_name"
            label="Button Name"
            value="{{ old('button_name', ($editing ? $homeAboutSection->button_name : '')) }}"
            placeholder="Button Name"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="button_link"
            label="Button Link"
            value="{{ old('button_link', ($editing ? $homeAboutSection->button_link : '')) }}"
            placeholder="Button Link"
        ></x-inputs.text>
    </x-inputs.group>
</div>
