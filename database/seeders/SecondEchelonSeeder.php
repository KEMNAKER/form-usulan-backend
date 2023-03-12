<?php

namespace Database\Seeders;

use App\Models\FirstEchelon;
use App\Models\SecondEchelon;
use Illuminate\Database\Seeder;

class SecondEchelonSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $firstEchelon = FirstEchelon::whereName('Divisi A')->firstOrFail();

        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'Sub Divisi A',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'Sub Divisi B',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'Sub Divisi C',
        ]);
    }
}
