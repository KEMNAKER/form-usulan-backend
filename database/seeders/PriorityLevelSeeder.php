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
            'name' => 'HP',
        ]);
        PriorityLevel::updateOrCreate([
            'name' => 'MP',
        ]);
        PriorityLevel::updateOrCreate([
            'name' => 'LP',
        ]);
    }
}
