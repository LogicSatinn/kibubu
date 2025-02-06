<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\CategoryGroup;
use App\Models\User;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'color' => fake()->regexify('[A-Za-z0-9]{50}'),
            'user_id' => User::factory(),
            'group_id' => CategoryGroup::factory(),
            'category_group_id' => CategoryGroup::factory(),
        ];
    }
}
