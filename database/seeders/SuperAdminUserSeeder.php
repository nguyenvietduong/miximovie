<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'duongNguyenAdmin@gmail.com'],
            [
                'role_id' => 1,
                'name' => 'Duong Nguyen Admin',
                'username' => 'duongNguyenAdmin',
                'password' => Hash::make('password'),
            ]
        );
    }
}