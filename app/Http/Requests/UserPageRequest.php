<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserPageRequest extends FormRequest
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
            'name' => 'required|min:5|max:255',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => __('label.name_required'),
            'name.min' => __('label.name_length'),
            'name.max' => __('label.name_length'),
        ];
    }
}
