<?php

namespace Database\Factories;

use App\Enums\Period;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Budget;
use App\Models\BudgetLimit;
use App\Models\User;

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
