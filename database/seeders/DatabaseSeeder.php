<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'orionluna@example.com',
            'role' => 'admin',
            'password' => Hash::make('12345678'),
            'phone' => '12345678',
        ]);

        \App\Models\ProfileClinic::factory()->create([
            'name' => "Klinik 24 Jam Kivotos",
            'address' => "Jl. Raya DU Kivotos No.15",
            'phone' => "07896654561",
            'email' => "KK@gmail.com",
            'doctor_name' => "Dr. Serina",
            'unique_code' => "123456",
        ]);

        //memanggil doctorseeder
        $this->call(DoctorSeeder::class);
    }


}
