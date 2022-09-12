<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageStoreRequest extends FormRequest
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
            'slug' => ['nullable', 'string'],
            'description' => ['nullable', 'string'],
            'price' => ['required', 'numeric'],
            'featured_image' => ['image', 'max:1024', 'nullable'],
            'title_bg_image' => ['image', 'max:1024', 'nullable'],
            'meta_title' => ['required', 'string'],
            'meta_keyword' => ['required', 'string'],
            'meta_description' => ['required', 'string'],
            'order_by' => ['required', 'numeric'],
            'status' => ['required', 'boolean'],
        ];
    }
}
