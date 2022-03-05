<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                // 'username' => 'admin',
                'email' => 'admin@email.com',
                'password' => Hash::make('123'),
                // 'image' => $faker->image(public_path('uploads'), 200, 200),
                // 'role' => 'admin',
                // 'status' => 'active',
            ],
            [
                'name' => 'Vendor',
                // 'username' => 'vendor',
                'email' => 'vendor@email.com',
                'password' => Hash::make('123'),
                // 'role' => 'vendor',
                // 'status' => 'active',
            ],
            [
                'name' => 'Customer',
                // 'username' => 'customer',
                'email' => 'customer@email.com',
                'password' => Hash::make('123'),
                // 'role' => 'customer',
                // 'status' => 'active',
            ]
        ]);
    }
}
