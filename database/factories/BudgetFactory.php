<?php

namespace Database\Factories;

use App\Enums\Period;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Budget;
use App\Models\User;

class BudgetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Budget::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'period' => fake()->randomElement(Period::class),
            'active' => fake()->boolean(chanceOfGettingTrue: 90),
            'user_id' => User::factory(),
        ];
    }
}
