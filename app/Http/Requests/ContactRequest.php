<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    const REGEX_CELL_PHONE = "/^\(([0-9]){2}\)\s([0-9]){4,5}-([0-9]){4}$/";

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
            "name" => "required|min:3|max:65",
            "email" => "required",
            "cellphone" => "required|regex:". ContactRequest::REGEX_CELL_PHONE,
            "skype" => "",
            "facebook" => ""
        ];
    }

    public function messages()
    {
        return [
            "name.required" => "Field name is required.",
            "name.min" => "Field name have minimun 3 caracteres.",
            "name.max" => "Field name have maximun 65 caracteres.",
            "cellphone.required" => "Field cellphone is required.",
            "email.required" => "Field email is required.",
            "cellphone.regex" => "Field cellphone is invalid."
        ];
    }
}
