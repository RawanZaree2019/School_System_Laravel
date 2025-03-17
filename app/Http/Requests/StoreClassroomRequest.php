<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassroomRequest extends FormRequest
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
            'list_classes.*.name'=> 'required|min:3|max:50',
            'list_classes.*.name_en'=> 'required|min:3|max:50',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => trans('messages.required'),
            'name_en.required' => trans('messages.required'),
        ];
    }
}
