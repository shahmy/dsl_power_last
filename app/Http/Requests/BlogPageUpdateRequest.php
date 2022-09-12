<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPageUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string'],
            'slug' => ['required', 'string'],
            'url' => ['required', 'url'],
            'description' => ['nullable', 'max:255', 'string'],
            'title_bg_image' => ['image', 'max:1024', 'nullable'],
            'title_description' => ['nullable', 'max:255', 'string'],
            'meta_title' => ['required', 'string'],
            'meta_keyword' => ['required', 'string'],
            'meta_description' => ['required', 'string'],
        ];
    }
}
