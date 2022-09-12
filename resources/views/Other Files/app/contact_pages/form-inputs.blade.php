@php $editing = isset($contactPage) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $contactPage->name : '')) }}"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="google_map" label="Google Map" required
            >{{ old('google_map', ($editing ? $contactPage->google_map : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="meta_title"
            label="Meta Title"
            value="{{ old('meta_title', ($editing ? $contactPage->meta_title : '')) }}"
            placeholder="Meta Title"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="meta_keyword" label="Meta Keyword" required
            >{{ old('meta_keyword', ($editing ? $contactPage->meta_keyword :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="meta_description"
            label="Meta Description"
            required
            >{{ old('meta_description', ($editing ?
            $contactPage->meta_description : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
