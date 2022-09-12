@php $editing = isset($product) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select
            name="product_category_id"
            label="Product Category"
            required
        >
            @php $selected = old('product_category_id', ($editing ? $product->product_category_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Product Category</option>
            @foreach($productCategories as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $product->name : '')) }}"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="small_description"
            label="Small Description"
            required
            >{{ old('small_description', ($editing ? $product->small_description
            : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="detail_description" label="Detail Description"
            >{{ old('detail_description', ($editing ?
            $product->detail_description : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $product->featured_image ? \Storage::url($product->featured_image) : '' }}')"
        >
            <x-inputs.partials.label
                name="featured_image"
                label="Featured Image"
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
                    name="featured_image"
                    id="featured_image"
                    @change="fileChosen"
                />
            </div>

            @error('featured_image')
            @include('components.inputs.partials.error') @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.checkbox
            name="status"
            label="Status"
            :checked="old('status', ($editing ? $product->status : 1))"
        ></x-inputs.checkbox>
    </x-inputs.group>
</div>
