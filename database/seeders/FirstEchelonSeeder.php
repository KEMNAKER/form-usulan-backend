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
            'name' => 'DIREKTORAT JENDERAL PEMBINAAN PELATIHAN VOKASI DAN PRODUKTIVITAS',
        ]);
        FirstEchelon::updateOrCreate([
            'name' => 'DIREKTORAT JENDERAL PEMBINAAN PENEMPATAN TENAGA KERJA DAN PERLUASAN KESEMPATAN KERJA',
        ]);
        FirstEchelon::updateOrCreate([
            'name' => 'DIREKTORAT JENDERAL PEMBINAAN HUBUNGAN INDUSTRIAL DAN JAMINAN SOSIAL TENAGA KERJA',
        ]);
        FirstEchelon::updateOrCreate([
            'name' => 'DIREKTORAT JENDERAL PEMBINAAN PENGAWASAN KETENAGAKERJAAN DAN KESELAMATAN DAN KESEHATAN KERJA',
        ]);
        FirstEchelon::updateOrCreate([
            'name' => 'INSPEKTORAT JENDERAL',
        ]);
        FirstEchelon::updateOrCreate([
            'name' => 'SEKRETARIAT JENDERAL',
        ]);
        FirstEchelon::updateOrCreate([
            'name' => 'BADAN PERENCANAAN DAN PENGEMBANGAN KETENAGAKERJAAN',
        ]);
    }
}
