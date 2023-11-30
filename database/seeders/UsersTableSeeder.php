<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Erick',
            'email' => 'erick@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234567889'), // password
            'cedula' => '04000712',
            'address' => 'Av. Universitaria',
            'phone' => '096800009',
            'role' => 'admin', 
        ]);
        User::create([
            'name' => 'Paciente1',
            'email' => 'paciente1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234567889'), // password
            'role' => 'paciente', 
        ]);
        User::create([
            'name' => 'Medico1',
            'email' => 'medico1@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('1234567889'), // password
            'cedula' => '04000712',
            'role' => 'doctor', 
        ]);
        User::factory()
            ->count(50)
            ->state(['role' => 'paciente'])
            ->create();
    }
}
