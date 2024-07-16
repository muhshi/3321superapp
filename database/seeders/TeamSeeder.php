<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->delete();

        $tims = [
            ['name' => 'Kepala'],
            ['name' => 'Umum'],
            ['name' => 'Sosial'],
            ['name' => 'Produksi'],
            ['name' => 'Distribusi'],
            ['name' => 'Nerwilis'],
            ['name' => 'IPDS'],
            ['name' => 'RB'],
        ];

        DB::table('teams')->insert($tims);
    }
}
