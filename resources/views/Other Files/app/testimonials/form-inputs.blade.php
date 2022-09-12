@php $editing = isset($testimonial) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $testimonial->name : '')) }}"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="company_name"
            label="Company Name"
            value="{{ old('company_name', ($editing ? $testimonial->company_name : '')) }}"
            placeholder="Company Name"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="description" label="Description" required
            >{{ old('description', ($editing ? $testimonial->description : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $testimonial->logo ? \Storage::url($testimonial->logo) : '' }}')"
        >
            <x-inputs.partials.label
                name="logo"
                label="Logo"
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
                <input type="file" name="logo" id="logo" @change="fileChosen" />
            </div>

            @error('logo') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group>
</div>
