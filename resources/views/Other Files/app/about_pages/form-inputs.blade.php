@php $editing = isset($aboutPage) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            value="{{ old('name', ($editing ? $aboutPage->name : '')) }}"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="slug"
            label="Slug"
            value="{{ old('slug', ($editing ? $aboutPage->slug : '')) }}"
            placeholder="Slug"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.url
            name="url"
            label="Url"
            value="{{ old('url', ($editing ? $aboutPage->url : '')) }}"
            placeholder="Url"
            required
        ></x-inputs.url>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="description" label="Description"
            >{{ old('description', ($editing ? $aboutPage->description : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $aboutPage->featured_image ? \Storage::url($aboutPage->featured_image) : '' }}')"
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
        <x-inputs.textarea name="title_description" label="Title Description"
            >{{ old('title_description', ($editing ?
            $aboutPage->title_description : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $aboutPage->title_bg_image ? \Storage::url($aboutPage->title_bg_image) : '' }}')"
        >
            <x-inputs.partials.label
                name="title_bg_image"
                label="Title Bg Image"
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
                    name="title_bg_image"
                    id="title_bg_image"
                    @change="fileChosen"
                />
            </div>

            @error('title_bg_image')
            @include('components.inputs.partials.error') @enderror
        </div>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="meta_title"
            label="Meta Title"
            value="{{ old('meta_title', ($editing ? $aboutPage->meta_title : '')) }}"
            placeholder="Meta Title"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="meta_keyword" label="Meta Keyword" required
            >{{ old('meta_keyword', ($editing ? $aboutPage->meta_keyword : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="meta_description"
            label="Meta Description"
            required
            >{{ old('meta_description', ($editing ? $aboutPage->meta_description
            : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
