<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profile')->insert([
            'addres' => 'Jember',
            'nomor_tlp' => '08123456789',
            'ttl' => '2000-01-01',
            'foto' => './public/img/logomitrabangunan.jpg',
        ]);
    }
}
