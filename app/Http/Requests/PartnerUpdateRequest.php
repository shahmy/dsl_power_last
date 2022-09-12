<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerUpdateRequest extends FormRequest
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
            'description' => ['string', 'required'],
            'logo' => ['image', 'max:1024', 'nullable'],
            'website' => ['nullable', 'max:255', 'string'],
            'orderby' => ['nullable', 'numeric'],
            'status' => ['nullable', 'boolean'],
        ];
    }
}
