<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminAskForm extends FormRequest
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
            'your_name' => 'required|string|max:20',
            'my_number' => 'required|unique:ask_forms|digits:12',
            'password' => 'required|digits:4',
            'birthday' => 'required',
            'address' => 'required|string|max:255',
            'gender' => 'required',

        ];
    }
}
