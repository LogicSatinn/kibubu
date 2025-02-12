<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\AccountType;
use App\Models\Institution;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Loan::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'type' => AccountType::LOAN->value,
            'opened_on' => fake()->date(),
            'expected_closure_date' => fake()->dateTimeBetween(startDate: 'now', endDate: '+2 years'),
            'remaining_balance' => fake()->randomFloat(2, 0, 9999999999.99),
            'principal' => fake()->randomFloat(2, 0, 9999999999.99),
            'interest_rate' => fake()->randomFloat(2, 0, 999.99),
            'description' => fake()->text(),
            'user_id' => User::factory(),
            'institution_id' => Institution::factory(),
        ];
    }
}
