<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeAboutSectionUpdateRequest extends FormRequest
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
            'heading' => ['nullable', 'string'],
            'sub_heading' => ['nullable', 'string'],
            'description' => ['required', 'string'],
            'image' => ['nullable', 'image', 'max:1024'],
            'image_title' => ['nullable', 'string'],
            'button_name' => ['nullable', 'string'],
            'button_link' => ['nullable', 'string'],
        ];
    }
}
