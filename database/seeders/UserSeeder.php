<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['role_id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['role_id' => 2, 'name' => 'Doctor', 'email' => 'doctor@doctor.com', 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['role_id' => 3, 'name' => 'Receptionist', 'email' => 'reception@reception.com', 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['role_id' => 4, 'name' => 'Cashier', 'email' => 'cashier@cashier.com', 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['role_id' => 5, 'name' => 'Lab Technician', 'email' => 'lab@lab.com', 'email_verified_at' => now(), 'password' => Hash::make('password')],
            ['role_id' => 6, 'name' => 'Pharmacist', 'email' => 'pharmacy@pharmacy.com', 'email_verified_at' => now(), 'password' => Hash::make('password')],
        ];

        foreach ($users as $user) {
            User::updateOrCreate(['email' => $user['email']], $user);
        }
    }
}
