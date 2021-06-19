<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

    //** BACK-END VALIDATION */
    public function rules()
    {
        return [
            "name" => 'required|min:4',
            "message" => 'required|min:10',
            "subject" => 'required|min:4',
            "email" => 'required|email|unique',
        ];
    }

    // Customizing error msgs
    public function messages()
    {
        return [
            "name.required" => 'You should enter your name'
        ];
    }

        // Customizing error msgs: edit attrs - fields name
        public function attributes()
        {
              return [
                "email" => 'email address'
                //  email field is required. =>  email address field is required.
            ];
        }
}
