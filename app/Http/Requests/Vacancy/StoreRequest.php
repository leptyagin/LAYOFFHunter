<?php

namespace App\Http\Requests\Vacancy;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'company' => 'required|string',
            'location' => 'required|string',
            'email' => 'required|email:rfc,dns',
            'description' => 'required|string',
            'min_pay' => 'nullable|int',
            'max_pay' => 'nullable|int',
        ];
    }
}
