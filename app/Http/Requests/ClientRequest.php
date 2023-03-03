<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
     * @return array<string, Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'contact_name' => 'nullable|max:255',
            'address' => 'nullable|max:255',
            'zip_code' => 'nullable|numeric',
            'city' => 'nullable|max:255',
            'phone' => 'nullable|max:13',
            'email' => 'nullable|email',
            'description' => 'nullable',
            'comments' => 'nullable',
        ];
    }
}
