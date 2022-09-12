<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutPageUpdateRequest extends FormRequest
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
            'description' => ['nullable', 'string'],
            'featured_image' => ['image', 'max:1024', 'nullable'],
            'title_description' => ['nullable', 'string'],
            'title_bg_image' => ['image', 'max:1024', 'nullable'],
            'meta_title' => ['required', 'string'],
            'meta_keyword' => ['required', 'string'],
            'meta_description' => ['required', 'string'],
        ];
    }
}
