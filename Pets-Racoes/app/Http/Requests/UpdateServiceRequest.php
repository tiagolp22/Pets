<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateServiceRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            "nom"=>"required|min:3|max:50|string",
            "description" => "required|min:3|max:150|string",
            "prix"=>"required|numeric|min:0|max:2000",
            "image"=>"required|image|max:2048",
        ];
    }
}
