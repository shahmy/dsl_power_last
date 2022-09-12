@php $editing = isset($loadItem) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select
            name="appliance_category_id"
            label="Appliance Category"
            required
        >
            @php $selected = old('appliance_category_id', ($editing ? $loadItem->appliance_category_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Appliance Category</option>
            @foreach($applianceCategories as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $loadItem->name : '')) }}"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            name="watts"
            label="Watts"
            value="{{ old('watts', ($editing ? $loadItem->watts : '')) }}"
            step="0.01"
            placeholder="Watts"
            required
        ></x-inputs.number>
    </x-inputs.group>
</div>
