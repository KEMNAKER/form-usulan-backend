<?php

namespace Database\Seeders;

use App\Models\FirstEchelon;
use Illuminate\Database\Seeder;

class FirstEchelonSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        FirstEchelon::updateOrCreate([
            'name' => 'Divisi A',
        ]);
        FirstEchelon::updateOrCreate([
            'name' => 'Divisi B',
        ]);
        FirstEchelon::updateOrCreate([
            'name' => 'Divisi C',
        ]);
    }
}
