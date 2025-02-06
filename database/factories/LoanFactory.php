<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Institution;
use App\Models\Loan;
use App\Models\User;

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
            'name' => fake()->name(),
            'type' => fake()->regexify('[A-Za-z0-9]{100}'),
            'opened_on' => fake()->date(),
            'expected_closure_date' => fake()->date(),
            'remaining_balance' => fake()->randomFloat(2, 0, 9999999999.99),
            'principal' => fake()->randomFloat(2, 0, 9999999999.99),
            'interest_rate' => fake()->randomFloat(2, 0, 999.99),
            'description' => fake()->text(),
            'user_id' => User::factory(),
            'institution_id' => Institution::factory(),
        ];
    }
}
