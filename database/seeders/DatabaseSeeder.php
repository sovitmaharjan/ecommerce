<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        // \App\Models\Admin\Banner::factory(4)->create();
        $this->call(UserSeeder::class);
        // \App\Models\Admin\Banner::factory(4)->create();
    }
}
