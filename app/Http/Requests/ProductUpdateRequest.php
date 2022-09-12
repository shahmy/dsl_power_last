<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductUpdateRequest extends FormRequest
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
            'product_category_id' => [
                'required',
                'exists:product_categories,id',
            ],
            'name' => ['required', 'string'],
            'small_description' => ['required', 'string'],
            'detail_description' => ['nullable', 'string'],
            'featured_image' => ['image', 'max:1024', 'required'],
            'status' => ['required', 'boolean'],
        ];
    }
}
