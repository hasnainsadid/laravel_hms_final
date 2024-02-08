<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicine')->insert([
            'name'=> 'Napa',
            'status'=> 1,
        ]);
        DB::table('medicine')->insert([
            'name'=> 'Omidon',
            'status'=> 1,
        ]);
        DB::table('medicine')->insert([
            'name'=> 'Paracitamol',
            'status'=> 1,
        ]);
        DB::table('medicine')->insert([
            'name'=> 'Tetrazin',
            'status'=> 1,
        ]);
    }
}
