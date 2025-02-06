<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Account;
use App\Models\Institution;
use App\Models\User;

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
            'name' => fake()->name(),
            'type' => fake()->regexify('[A-Za-z0-9]{100}'),
            'account_number' => fake()->regexify('[A-Za-z0-9]{50}'),
            'balance' => fake()->randomFloat(2, 0, 9999999999.99),
            'interest_rate' => fake()->randomFloat(2, 0, 999.99),
            'description' => fake()->text(),
            'user_id' => User::factory(),
            'institution_id' => Institution::factory(),
        ];
    }
}
