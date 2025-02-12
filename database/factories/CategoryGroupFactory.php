<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\CategoryGroup;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryGroupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CategoryGroup::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'color' => fake()->regexify('[A-Za-z0-9]{50}'),
            'user_id' => User::factory(),
        ];
    }
}
