<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('department')->insert([
            'name' => 'Orthopedics',
            'description' => 'Orthopedics focuses on treating the musculoskeletal system. This system comprises muscles, bones, joints, ligaments, and tendons.',
            'status' => 1
        ]);
        DB::table('department')->insert([
            'name' => 'Medicine',
            'description' => 'Medicines are chemicals or compounds used to cure, halt, or prevent disease; ease symptoms; or help in the diagnosis of illnesses. Advances in medicines have enabled doctors to cure many diseases and save lives.',
            'status' => 1
        ]);
        DB::table('department')->insert([
            'name' => 'Dermatology',
            'description' => 'Dermatology involves the study, research, diagnosis, and management of any health conditions that may affect the skin, fat hair, nails, and membranes.',
            'status' => 1
        ]);
        DB::table('department')->insert([
            'name' => 'Hematology',
            'description' => 'Hematology is the science or study of blood and blood diseases.',
            'status' => 1
        ]);
        DB::table('department')->insert([
            'name' => 'Psychology',
            'description' => 'Psychology is the scientific study of the mind and behavior.',
            'status' => 1
        ]);
        DB::table('department')->insert([
            'name' => 'Gynaecology',
            'description' => 'Gynaecology or gynecology is the area of medicine that involves the treatment of womens diseases, especially those of the reproductive organs.',
            'status' => 1
        ]);
        DB::table('department')->insert([
            'name' => 'Neurology',
            'description' => 'Neurology is the branch of medicine that deals with disorders of the nervous system, which include the brain, blood vessels, muscles and nerves.',
            'status' => 1
        ]);
        DB::table('department')->insert([
            'name' => 'Pediatrics',
            'description' => 'Pediatrics is the branch of medicine that involves the medical care of infants, children, adolescents, and young adults.',
            'status' => 1
        ]);
    }
}
