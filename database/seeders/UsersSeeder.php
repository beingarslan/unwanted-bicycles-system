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
            'first_name'        => $faker->firstName,
            'last_name'         => $faker->lastName,
            'email'             => 'admin@admin.com',
            'password'          => Hash::make('1234567890'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('1234567890'),
        ]);
        $demoUser->assignRole('admin');
       
        // $demoUser = User::create([
        //     'first_name'        => $faker->firstName,
        //     'last_name'         => $faker->lastName,
        //     'email'             => 'admin@admin.com',
        //     'password'          => Hash::make('1234567890'),
        //     'email_verified_at' => now(),
        //     'api_token'         => Hash::make('1234567890'),
        // ]);
        // $demoUser->assignRole('admin');



        $demoUser2 = User::create([
            'first_name'        => $faker->firstName,
            'last_name'         => $faker->lastName,
            'email'             => 'user@user.com',
            'password'          => Hash::make('demo'),
            'email_verified_at' => now(),
            'api_token'         => Hash::make('admin@demo'),
        ]);
        $demoUser2->assignRole('user');



        User::factory(100)->create()->each(function (User $user) use ($faker) {
            $user->assignRole('user');
        });
    }
}
