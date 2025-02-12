<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\AutoBudgetType;
use App\Enums\Period;
use App\Models\AutoBudget;
use App\Models\Budget;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
