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
        $firstEchelon = FirstEchelon::whereName('DIREKTORAT JENDERAL PEMBINAAN PELATIHAN VOKASI DAN PRODUKTIVITAS')->firstOrFail();

        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA STANDARDISASI KOMPETENSI DAN PROGRAM PELATIHAN',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA KELEMBAGAAN PELATIHAN VOKASI',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA PENYELENGGARAAN PELATIHAN VOKASI DAN PEMAGANGAN',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA PENINGKATAN PRODUKTIVITAS',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA INSTRUKTUR DAN TENAGA PELATIHAN',
        ]);

        //

        $firstEchelon = FirstEchelon::whereName('DIREKTORAT JENDERAL PEMBINAAN PENEMPATAN TENAGA KERJA DAN PERLUASAN KESEMPATAN KERJA')->firstOrFail();

        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA PENEMPATAN TENAGA KERJA DALAM NEGERI',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA PENEMPATAN DAN PELINDUNGAN PEKERJA MIGRAN INDONESIA',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA PERLUASAN KESEMPATAN KERJA',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT PENGENDALIAN PENGGUNAAN TENAGA KERJA ASING',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA PENGANTAR KERJA',
        ]);

        //

        $firstEchelon = FirstEchelon::whereName('DIREKTORAT JENDERAL PEMBINAAN HUBUNGAN INDUSTRIAL DAN JAMINAN SOSIAL TENAGA KERJA')->firstOrFail();

        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT HUBUNGAN KERJA DAN PENGUPAHAN',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT JAMINAN SOSIAL TENAGA KERJA',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT KELEMBAGAAN DAN PENCEGAHAN PERSELISIHAN HUBUNGAN INDUSTRIAL',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT PENYELESAIAN PERSELISIHAN HUBUNGAN INDUSTRIAL',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA MEDIATOR HUBUNGAN INDUSTRIAL',
        ]);

        //

        $firstEchelon = FirstEchelon::whereName('DIREKTORAT JENDERAL PEMBINAAN PENGAWASAN KETENAGAKERJAAN DAN KESELAMATAN DAN KESEHATAN KERJA')->firstOrFail();

        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA SISTEM PENGAWASAN KETENAGAKERJAAN',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA KELEMBAGAAN KESELAMATAN DAN KESEHATAN KERJA',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA PEMERIKSAAN NORMA KETENAGAKERJAAAN',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA PENGUJIAN KESELAMATAN DAN KESEHATAN KERJA',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'DIREKTORAT BINA PENGAWAS KETENAGAKERJAAN DAN PENGUJI KESELAMATAN DAN KESEHATAN KERJA',
        ]);

        //

        $firstEchelon = FirstEchelon::whereName('INSPEKTORAT JENDERAL')->firstOrFail();

        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'INSPEKTORAT I',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'INSPEKTORAT II',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'INSPEKTORAT III',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'INSPEKTORAT IV',
        ]);

        //

        $firstEchelon = FirstEchelon::whereName('SEKRETARIAT JENDERAL')->firstOrFail();

        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'BIRO PERENCANAAN DAN MANAJEMEN KINERJA',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'BIRO KEUANGAN DAN BARANG MILIK NEGARA',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'BIRO ORGANISASI DAN SUMBER DAYA MANUSIA APARATUR',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'BIRO HUKUM',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'BIRO UMUM',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'BIRO KERJA SAMA',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'BIRO HUBUNGAN MASYARAKAT',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'PUSAT PENGEMBANGAN SUMBER DAYA MANUSIA KETENAGAKERJAAN',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'PUSAT PASAR KERJA',
        ]);

        //

        $firstEchelon = FirstEchelon::whereName('BADAN PERENCANAAN DAN PENGEMBANGAN KETENAGAKERJAAN')->firstOrFail();

        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'PUSAT PERENCANAAN KETENAGAKERJAAN',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'PUSAT DATA DAN TEKNOLOGI INFORMASI KETENAGAKERJAAN',
        ]);
        SecondEchelon::updateOrCreate([
            'first_echelon_id' => $firstEchelon->id,
            'name' => 'PUSAT PENGEMBANGAN KEBIJAKAN KETENAGAKERJAAN ',
        ]);
    }
}
