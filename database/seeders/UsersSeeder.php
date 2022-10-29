<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserInfo;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $demoUser = User::create([
            'name'        => $faker->name(),
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('1234567890'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('1234567890'),
        ]);
        $demoUser->assignRole('admin');

        $demoUser2 = User::create([
            'name'        => $faker->name(),
            'email'             => 'user@user.com',
            'password'          => Hash::make('1234567890'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('1234567890'),
        ]);
        $demoUser2->assignRole('user');

        User::factory(10)->create()->each(function (User $user) use ($faker) {
            $user->assignRole('user');
        });
    }
}
