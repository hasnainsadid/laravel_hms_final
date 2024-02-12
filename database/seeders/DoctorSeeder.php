<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('doctor')->insert([
            'name'=>'Dr. Amzad Hossain',
            'designation'=>'Professor',
            'email'=>'amzad@gmail.com',
            'password'=>Hash::make('doctor123'),
            'phone'=>'01723835125',
            'img'=>'1706772562.jpg',
            'status'=>1,
            'd_id'=>1,
        ]);
        DB::table('doctor')->insert([
            'name'=>'Dr. Mehenaz Tabassum',
            'designation'=>'Professor',
            'email'=>'mehnaz@gmail.com',
            'password'=>Hash::make('doctor123'),
            'phone'=>'01911364781',
            'img'=>'1706772645.jpg',
            'status'=>1,
            'd_id'=>6,
        ]);
        DB::table('doctor')->insert([
            'name'=>'Dr. Humayra',
            'designation'=>'Professor',
            'email'=>'humayra@gmail.com',
            'password'=>Hash::make('doctor123'),
            'phone'=>'01674839022',
            'img'=>'1706772701.jpg',
            'status'=>1,
            'd_id'=>1,
        ]);
    }
}
