<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('keluarga')->insert([
            [
                'nama_lengkap'      =>  'SUHARSONO',
                'status_keluarga'   =>  'AYAH',
                'jk'                =>  'LAKI-LAKI',
                'tempat_lahir'      =>  'MALANG',
                'tanggal_lahir'     =>  '12-12-1970'
            ],
            [
                'nama_lengkap'      =>  'TRI PADMI WULANDARI',
                'status_keluarga'   =>  'IBU',
                'jk'                =>  'PEREMPUAN',
                'tempat_lahir'      =>  'MALANG',
                'tanggal_lahir'     =>  '03-04-1973'
            ],
            [
                'nama_lengkap'      =>  "DHIYA'UDDIN FIRMANSYAH",
                'status_keluarga'   =>  'ANAK 1',
                'jk'                =>  'LAKI-LAKI',
                'tempat_lahir'      =>  'MALANG',
                'tanggal_lahir'     =>  '28-06-2003'
            ],
            [
                'nama_lengkap'      =>  'DZAKY ILHAM NASHARUDDIN',
                'status_keluarga'   =>  'ANAK 2',
                'jk'                =>  'LAKI-LAKI',
                'tempat_lahir'      =>  'MALANG',
                'tanggal_lahir'     =>  '27-04-2005'
            ],
            [
                'nama_lengkap'      =>  'DARIS MUHAMMAD AZZAM',
                'status_keluarga'   =>  'ANAK 3',
                'jk'                =>  'LAKI-LAKI',
                'tempat_lahir'      =>  'MALANG',
                'tanggal_lahir'     =>  '21-03-2011'
            ]
        ]);
    }
}
