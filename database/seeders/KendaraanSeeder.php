<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            [
                'nopol'     =>  'N 1164 BCA',
                'merk'      =>  'Honda',
                'jenis'     =>  'Beat',
                'tahun_buat'=>  '2021',
                'warna'     =>  'Hitam'
            ],
            [
                'nopol'     =>  'N 2534 AAC',
                'merk'      =>  'Nissan',
                'jenis'     =>  'Silvia S15',
                'tahun_buat'=>  '2017',
                'warna'     =>  'White'
            ],
            [
                'nopol'     =>  'N 2532 AAC',
                'merk'      =>  'Toyota',
                'jenis'     =>  'Supra Mk4',
                'tahun_buat'=>  '2015',
                'warna'     =>  'White'
            ]
            ]);
    }
}
