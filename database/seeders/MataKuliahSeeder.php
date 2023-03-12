<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_kuliah')->insert([
            [
                'hari'          =>  'Senin',
                'jam'           =>  '07:00 - 12:15',
                'kode_mk'       =>  'RTI214008',
                'mata_kuliah'   =>  'Pemrograman Web Lanjut',
                'dosen'         =>  'Moch. Zawaruddin Abdullah, S.ST., M.Kom.'
            ],
            [
                'hari'          =>  'Senin',
                'jam'           =>  '14:25 - 18:00',
                'kode_mk'       =>  'RTI214009',
                'mata_kuliah'   =>  'Statistik Komputasi',
                'dosen'         =>  'Elok Nur Hamdana, S.T, M.T.'
            ],
            [
                'hari'          =>  'Selasa',
                'jam'           =>  '07:00 - 11:45',
                'kode_mk'       =>  'RTI214004',
                'mata_kuliah'   =>  'Proyek 1',
                'dosen'         =>  'Farid Angga Pribadi, S.Kom., M.Kom.'
            ],
            [
                'hari'          =>  'Selasa',
                'jam'           =>  '14:00 - 17:30',
                'kode_mk'       =>  'RTI214005',
                'mata_kuliah'   =>  'Business Intelligence',
                'dosen'         =>  'Endah Septa Sintiya, S.Pd., M.Kom.'
            ],
            [
                'hari'          =>  'Rabu',
                'jam'           =>  '07:00 - 10:35',
                'kode_mk'       =>  'RTI214006',
                'mata_kuliah'   =>  'Jaringan Komputer',
                'dosen'         =>  'Kadek Suarjuna Batubulan, S.Kom., M.T.'
            ],
            [
                'hari'          =>  'Rabu',
                'jam'           =>  '10:35 - 13:35',
                'kode_mk'       =>  'RTI214003',
                'mata_kuliah'   =>  'Manajemen Proyek',
                'dosen'         =>  'Candra Bella Vista, S.Kom., M.T.'
            ],
            [
                'hari'          =>  'Kamis',
                'jam'           =>  '07:00 - 08:30',
                'kode_mk'       =>  'RTI214001',
                'mata_kuliah'   =>  'Kewarganegaraan',
                'dosen'         =>  'Widaningsih, S.H., M.H.'
            ],
            [
                'hari'          =>  'Kamis',
                'jam'           =>  '08:30 - 11:45',
                'kode_mk'       =>  'RTI214002',
                'mata_kuliah'   =>  'Analisis dan Desain Berorentasi Objek',
                'dosen'         =>  'Ariadi Retno Tri Hayati Ririd, S.Kom., M.Kom.'
            ],
            [
                'hari'          =>  'Jumat',
                'jam'           =>  '07:45 - 10:45',
                'kode_mk'       =>  'RTI214007',
                'mata_kuliah'   =>  'Praktikum Jaringan Komputer',
                'dosen'         =>  'Kadek Suarjuna Batubulan, S.Kom., M.T.'
            ]
        ]);
    }
}
