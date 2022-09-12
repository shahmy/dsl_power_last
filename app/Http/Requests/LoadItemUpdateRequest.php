<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoadItemUpdateRequest extends FormRequest
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
            'appliance_category_id' => [
                'required',
                'exists:appliance_categories,id',
            ],
            'name' => ['required', 'string'],
            'watts' => ['required', 'numeric'],
        ];
    }
}
