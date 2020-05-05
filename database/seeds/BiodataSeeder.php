<?php

use Illuminate\Database\Seeder;

class BiodataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $biodata=[
            [
                'nama'=>'Ryan Jom',
                'alamat'=>'jl. imam bonjol',
                'pekerjaan'=>'pemrograman'
            ],
            [
                'nama'=>'Junod Junior',
                'alamat'=>'Osumetundu',
                'pekerjaan'=>'Staff Gudang'
            ],
            [
                'nama'=>'PS Squidword',
                'alamat'=>'Jl. Gunung Jati',
                'pekerjaan'=>'Pegawai Swasta'
            ]
        ];
        DB::table('biodata')->insert($biodata);
    }
}
