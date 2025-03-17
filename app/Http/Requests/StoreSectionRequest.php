<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name_section_ar'=> 'required|min:3|max:50',
            'name_section_en'=> 'required|min:3|max:50',
        ];
    }

    public function messages()
    {
        return [
            'name_section_ar.required' => trans('messages.required'),
            'name_section_en.required' => trans('messages.required'),
        ];
    }
}
