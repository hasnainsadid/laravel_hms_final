<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('seats')->insert([
            'name'=> 'A001',
            'cost' => 300,
        ]);
        DB::table('seats')->insert([
            'name'=> 'A002',
            'cost' => 300,
        ]);
        DB::table('seats')->insert([
            'name'=> 'A003',
            'cost' => 300,
        ]);
        DB::table('seats')->insert([
            'name'=> 'B001',
            'cost' => 350,
        ]);
        DB::table('seats')->insert([
            'name'=> 'B002',
            'cost' => 350,
        ]);
        DB::table('seats')->insert([
            'name'=> 'B003',
            'cost' => 350,
        ]);
        DB::table('seats')->insert([
            'name'=> 'C001',
            'cost' => 400,
        ]);
        DB::table('seats')->insert([
            'name'=> 'C002',
            'cost' => 400,
        ]);
        DB::table('seats')->insert([
            'name'=> 'C003',
            'cost' => 400,
        ]);
        DB::table('seats')->insert([
            'name'=> 'VIP',
            'cost' => 500,
        ]);
    }
}
