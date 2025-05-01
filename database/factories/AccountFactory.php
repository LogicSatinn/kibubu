<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Enums\AccountType;
use App\Models\Account;
use App\Models\Institution;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Account::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['Savings Account', 'Checking Account', 'M-Pesa', 'Airtel Money']),
            'type' => fake()->randomElement(AccountType::class),
            'account_number' => fake()->numberBetween(int1: 100000000, int2: 99999999999999999),
            'balance' => fake()->randomFloat(2, 0, 9999999999.99),
            'interest_rate' => fake()->randomFloat(2, 0, 99.99),
            'description' => fake()->text(),

            // Loan
            'opened_on' => fake()->date(),
            'expected_closure_date' => fake()->dateTimeBetween(startDate: 'now', endDate: '+2 years'),
            'remaining_balance' => fake()->randomFloat(2, 0, 9999999999.99),
            'principal' => fake()->randomFloat(2, 0, 9999999999.99),

            // Credit Card
            'brand' => fake()->company(),
            'credit_limit' => fake()->randomFloat(2, 0, 9999999999.99),

            'user_id' => User::factory(),
            'institution_id' => Institution::factory(),
        ];
    }
}
