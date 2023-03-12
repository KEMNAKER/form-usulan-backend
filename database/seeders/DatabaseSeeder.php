<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            FirstEchelonSeeder::class,
            SecondEchelonSeeder::class,
            ProposalTypeSeeder::class,
            PriorityLevelSeeder::class,
            UserSeeder::class,
        ]);
    }
}
