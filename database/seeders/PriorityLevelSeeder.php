<?php

namespace Database\Seeders;

use App\Models\PriorityLevel;
use Illuminate\Database\Seeder;

class PriorityLevelSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        PriorityLevel::updateOrCreate([
            'name' => 'High Priority (HP)',
        ]);
        PriorityLevel::updateOrCreate([
            'name' => 'Medium Priority (MP)',
        ]);
        PriorityLevel::updateOrCreate([
            'name' => 'Low Priority (LP)',
        ]);
    }
}
