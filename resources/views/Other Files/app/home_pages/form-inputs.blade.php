@php $editing = isset($homePage) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $homePage->name : '')) }}"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.url
            name="url"
            label="Url"
            value="{{ old('url', ($editing ? $homePage->url : '')) }}"
            placeholder="Url"
            required
        ></x-inputs.url>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="meta_keyword"
            label="Meta Keyword"
            value="{{ old('meta_keyword', ($editing ? $homePage->meta_keyword : '')) }}"
            maxlength="255"
            placeholder="Meta Keyword"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="meta_title"
            label="Meta Title"
            value="{{ old('meta_title', ($editing ? $homePage->meta_title : '')) }}"
            placeholder="Meta Title"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="meta_description"
            label="Meta Description"
            required
            >{{ old('meta_description', ($editing ? $homePage->meta_description
            : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
