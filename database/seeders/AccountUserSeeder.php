<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;
use Illuminate\Support\Str;

class AccountUserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            User::create([
                'role_id' => 2,

                'name' => $faker->name,
                'username' => $faker->name . $i, // Unique username for each user
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => now(),
                'password' => Hash::make('password'),

                'phone' => $faker->phoneNumber,
                'avatar' => "https://jbagy.me/wp-content/uploads/2025/03/Hinh-anh-avatar-con-vit-vang-cute-7.jpg",
                'gender' => $faker->randomElement(['male', 'female', 'other']),
                'birthdate' => $faker->date('Y-m-d', '2005-01-01'),

                'last_seen' => $faker->dateTimeBetween('-1 years', 'now'),

                'remember_token' => Str::random(10),
            ]);
        }
    }
}
