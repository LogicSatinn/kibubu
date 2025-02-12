<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\Period;
use App\Models\Budget;
use App\Models\BudgetLimit;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BudgetLimitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BudgetLimit::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        $period = Period::WEEKLY;

        return [
            'amount' => fake()->randomFloat(2, 0, 999999999.99),
            'currency' => 'TZS',
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'budget_id' => Budget::factory(),
            'user_id' => User::factory(),
        ];
    }
}
