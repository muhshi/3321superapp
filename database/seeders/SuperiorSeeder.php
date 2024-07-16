<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperiorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('superiors')->delete();

        $superior = [
            ['name' => 'M. Masykuri Zaen'],
            ['name' => 'Paramitha Hanifia'],
            ['name' => 'Sucipto'],
            ['name' => 'Henri Wagiyanto'],
        ];

        DB::table('superiors')->insert($superior);
    }
}
