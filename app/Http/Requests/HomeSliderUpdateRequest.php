<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomeSliderUpdateRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'description' => ['nullable', 'string'],
            'image' => ['required', 'image', 'max:1024'],
            'button_name' => ['nullable', 'string'],
            'button_url' => ['nullable', 'string'],
            'video_url' => ['nullable', 'string'],
            'status' => ['required', 'boolean'],
        ];
    }
}
