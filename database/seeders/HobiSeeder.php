<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobi')->insert([
            [
                'hobi'  =>  'Bersepeda',
                'alasan'=>  'Bersepeda bisa menguatkan kaki dan pernapasan'
            ],
            [
                'hobi'  =>  'Sepak Bola',
                'alasan'=>  'Sepak Bola bisa menguatkan kaki dan pernapasan'
            ],
            [
                'hobi'  =>  'Berenang',
                'alasan'=>  'Berenang bisa tumbuh tinggi dan pernapasan'
            ],
            [
                'hobi'  =>  'Bermain Game',
                'alasan'=>  'Sudah biasa bermain dari kecil'
            ],
            [
                'hobi'  =>  'Tidur',
                'alasan'=>  'Karena tidur terasa enak'
            ]
        ]);
    }
}
