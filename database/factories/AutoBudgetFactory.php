<?php

namespace Database\Factories;

use App\Enums\AutoBudgetType;
use App\Enums\Period;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\AutoBudget;
use App\Models\Budget;
use App\Models\User;

class AutoBudgetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AutoBudget::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'type' => fake()->randomElement(AutoBudgetType::class),
            'amount' => fake()->randomFloat(2, 0, 999999999.99),
            'period' => fake()->randomElement(Period::class),
            'budget_id' => Budget::factory(),
            'user_id' => User::factory(),
        ];
    }
}
