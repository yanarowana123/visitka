<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Block3StoreRequest extends FormRequest
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
        $rules = [
            'title' => 'required|max:255',
            'description' => '',
            'image' => 'image',
            'is_active' => '',
            'sn' => 'required',
        ];

        if ($this->isMethod('POST')) {
            $rules['image'][] = 'required';
        }

        return $rules;

    }
}
