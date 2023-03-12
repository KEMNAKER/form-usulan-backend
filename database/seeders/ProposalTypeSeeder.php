<?php

namespace Database\Seeders;

use App\Models\ProposalType;
use Illuminate\Database\Seeder;

class ProposalTypeSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ProposalType::updateOrCreate([
            'name' => 'A',
        ]);
        ProposalType::updateOrCreate([
            'name' => 'B',
        ]);
        ProposalType::updateOrCreate([
            'name' => 'C',
        ]);
        ProposalType::updateOrCreate([
            'name' => 'D',
        ]);
    }
}
