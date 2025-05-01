<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Enums\AutoBudgetType;
use App\Enums\Period;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class NewBudgetRequest extends FormRequest
{
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
            'name' => ['required', 'string', 'min:3', 'max:100'],
            'auto_budget_type' => ['required', Rule::enum(AutoBudgetType::class)],
            'currency' => ['required', 'string', 'max:3'],
            'amount' => ['required', 'numerical', 'min:0', 'max:9999999999'],
            'period' => ['required', Rule::enum(Period::class)],
        ];
    }
}
