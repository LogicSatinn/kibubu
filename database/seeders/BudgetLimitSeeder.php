<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\BudgetLimit;
use Illuminate\Database\Seeder;

class BudgetLimitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BudgetLimit::factory()->count(5)->create();
    }
}
