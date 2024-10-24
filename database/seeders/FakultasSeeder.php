<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert beberapa data fakultas
        DB::table('fakultas')->insert([
            [
                'id' => 1,
                'nama_fakultas' => 'MIPA',
            ],
            [
                'id' => 2,
                'nama_fakultas' => 'Teknik',
            ],
            [
                'id' => 3,
                'nama_fakultas' => 'Ekonomi',
            ],
            [
                'id' => 4,
                'nama_fakultas' => 'Hukum',
            ],
            [
                'id' => 5,
                'nama_fakultas' => 'Ilmu Sosial dan Politik',
            ],
        ]);
    }
}
