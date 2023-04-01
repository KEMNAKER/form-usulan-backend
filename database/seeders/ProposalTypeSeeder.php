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
            'code' => 'A',
            'name' => 'PEMBANGUNAN APLIKASI BARU',
        ]);
        ProposalType::updateOrCreate([
            'code' => 'B',
            'name' => 'PENAMBAHAN FITUR BARU DARI APLIKASI',
        ]);
        ProposalType::updateOrCreate([
            'code' => 'C',
            'name' => 'PENGEMBANGAN FITUR DARI APLIKASI SAAT INI',
        ]);
        ProposalType::updateOrCreate([
            'code' => 'D',
            'name' => 'INTEGRASI DENGAN APLIKASI INTERNAL',
        ]);
        ProposalType::updateOrCreate([
            'code' => 'E',
            'name' => 'INTEGRASI DENGAN APLIKASI EKSTERNAL',
        ]);
        ProposalType::updateOrCreate([
            'code' => 'F',
            'name' => 'AKSES DATABASE',
        ]);
    }
}
