<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswa')->insert([
            'nama'=> 'ahmad',
            'nomor_induk' => '1000',
            'alamat'=>'Bekasi',
            'created_at' =>date('Y-m-d H:i:s'),
        ]);

        DB::table('siswa')->insert([
            'nama'=> 'fadli',
            'nomor_induk' => '1001',
            'alamat'=>'Bekasi',
            'created_at' =>date('Y-m-d H:i:s'),
        ]);

        DB::table('siswa')->insert([
            'nama'=> 'hafizh',
            'nomor_induk' => '1002',
            'alamat'=>'jakarta',
            'created_at' =>date('Y-m-d H:i:s'),
        ]);
    }
}
