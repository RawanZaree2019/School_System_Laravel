<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStageRequest extends FormRequest
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
            'name'=> 'required|min:3|max:50|unique:stages,name->ar,'.$this->id,
            'name_en'=> 'required|min:3|max:50|unique:stages,name->en,'.$this->id,
            'note'=> 'min:5|max:200',
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
