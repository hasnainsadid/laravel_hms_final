<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TreatmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('treatment')->insert([
            'name'=> 'Blood test',
            'cost' => 150,
            'status' => 1,
        ]);
        DB::table('treatment')->insert([
            'name'=> 'Echocardiogram',
            'cost' => 550,
            'status' => 1,
        ]);
        DB::table('treatment')->insert([
            'name'=> 'Bone Density Testing',
            'cost' => 345,
            'status' => 1,
        ]);
        DB::table('treatment')->insert([
            'name'=> 'IV Therapy',
            'cost' => 220,
            'status' => 1,
        ]);
        DB::table('treatment')->insert([
            'name'=> 'CT Scan',
            'cost' => 167,
            'status' => 1,
        ]);
        DB::table('treatment')->insert([
            'name'=> 'Oxygen therapy',
            'cost' => 137,
            'status' => 1,
        ]);
    }
}
