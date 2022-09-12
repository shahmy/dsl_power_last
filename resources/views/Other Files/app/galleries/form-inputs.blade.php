@php $editing = isset($gallery) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="post_id" label="Post">
            @php $selected = old('post_id', ($editing ? $gallery->post_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Post</option>
            @foreach($posts as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="project_id" label="Project">
            @php $selected = old('project_id', ($editing ? $gallery->project_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Project</option>
            @foreach($projects as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="product_id" label="Product">
            @php $selected = old('product_id', ($editing ? $gallery->product_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Product</option>
            @foreach($products as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $gallery->name : '')) }}"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="description" label="Description"
            >{{ old('description', ($editing ? $gallery->description : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.checkbox
            name="status"
            label="Status"
            :checked="old('status', ($editing ? $gallery->status : 1))"
        ></x-inputs.checkbox>
    </x-inputs.group>
</div>
