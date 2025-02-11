<?php

namespace Database\Seeders;

use App\Models\AutoBudget;
use Illuminate\Database\Seeder;

class AutoBudgetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AutoBudget::factory()->count(5)->create();
    }
}
