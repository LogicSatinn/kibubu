<?php

namespace Database\Factories;

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
            'type' => fake()->numberBetween(-10000, 10000),
            'amount' => fake()->randomFloat(2, 0, 999999999.99),
            'period' => fake()->regexify('[A-Za-z0-9]{50}'),
            'budget_id' => Budget::factory(),
            'user_id' => User::factory(),
        ];
    }
}
