<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoanUpdateRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'type' => ['required', 'string', 'max:100'],
            'opened_on' => ['required', 'date'],
            'expected_closure_date' => ['nullable', 'date'],
            'remaining_balance' => ['required', 'numeric', 'between:-9999999999.99,9999999999.99'],
            'principal' => ['required', 'numeric', 'between:-9999999999.99,9999999999.99'],
            'interest_rate' => ['required', 'numeric', 'between:-999.99,999.99'],
            'description' => ['nullable'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'institution_id' => ['required', 'integer', 'exists:institutions,id'],
        ];
    }
}
