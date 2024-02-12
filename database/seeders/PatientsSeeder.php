<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PatientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('patients')->insert([
            'name'=>'patient one', 
            'address'=> 'demo address one', 
            'dob'=> '1993-12-06', 
            'gender'=> 'male', 
            'blood_grp'=> 'O+', 
            'email'=>'patientone@gmail.com', 
            'password'=> Hash::make('patient123'), 
            'phone'=> '01654773300'
        ]);
        DB::table('patients')->insert([
            'name'=>'patient two', 
            'address'=> 'demo address two', 
            'dob'=> '1995-10-04', 
            'gender'=> 'male', 
            'blood_grp'=> 'O+', 
            'email'=>'patienttwo@gmail.com', 
            'password'=> Hash::make('patient123'), 
            'phone'=> '01654773300'
        ]);
        DB::table('patients')->insert([
            'name'=>'patient three', 
            'address'=> 'demo address three', 
            'dob'=> '1997-05-06', 
            'gender'=> 'male', 
            'blood_grp'=> 'O+', 
            'email'=>'patientthree@gmail.com', 
            'password'=> Hash::make('patient123'), 
            'phone'=> '01654773300'
        ]);
    }
}
