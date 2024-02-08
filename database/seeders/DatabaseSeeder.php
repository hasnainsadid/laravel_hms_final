<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(MedicineSeeder::class);
        $this->call(SeatsSeeder::class);
        $this->call(DepartmentsSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(PatientsSeeder::class);
        $this->call(TreatmentsSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(AdminSeeder::class);
    }
}
