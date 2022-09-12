@php $editing = isset($post) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="title"
            label="Title"
            value="{{ old('title', ($editing ? $post->title : '')) }}"
            placeholder="Title"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="slug"
            label="Slug"
            value="{{ old('slug', ($editing ? $post->slug : '')) }}"
            placeholder="Slug"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="small_description"
            label="Small Description"
            required
            >{{ old('small_description', ($editing ? $post->small_description :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="detail_description"
            label="Detail Description"
            required
            >{{ old('detail_description', ($editing ? $post->detail_description
            : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <div
            x-data="imageViewer('{{ $editing && $post->featured_image ? \Storage::url($post->featured_image) : '' }}')"
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
        <x-inputs.text
            name="meta_title"
            label="Meta Title"
            value="{{ old('meta_title', ($editing ? $post->meta_title : '')) }}"
            placeholder="Meta Title"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="meta_keyword"
            label="Meta Keyword"
            value="{{ old('meta_keyword', ($editing ? $post->meta_keyword : '')) }}"
            placeholder="Meta Keyword"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="meta_description"
            label="Meta Description"
            required
            >{{ old('meta_description', ($editing ? $post->meta_description :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.checkbox
            name="status"
            label="Status"
            :checked="old('status', ($editing ? $post->status : 1))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <div class="form-group col-sm-12 mt-4">
        <h4>Assign @lang('crud.categories.name')</h4>

        @foreach ($categories as $category)
        <div>
            <x-inputs.checkbox
                id="category{{ $category->id }}"
                name="categories[]"
                label="{{ ucfirst($category->name) }}"
                value="{{ $category->id }}"
                :checked="isset($post) ? $post->categories()->where('id', $category->id)->exists() : false"
                :add-hidden-value="false"
            ></x-inputs.checkbox>
        </div>
        @endforeach
    </div>
    <div class="form-group col-sm-12 mt-4">
        <h4>Assign @lang('crud.tags.name')</h4>

        @foreach ($tags as $tag)
        <div>
            <x-inputs.checkbox
                id="tag{{ $tag->id }}"
                name="tags[]"
                label="{{ ucfirst($tag->name) }}"
                value="{{ $tag->id }}"
                :checked="isset($post) ? $post->tags()->where('id', $tag->id)->exists() : false"
                :add-hidden-value="false"
            ></x-inputs.checkbox>
        </div>
        @endforeach
    </div>
</div>
