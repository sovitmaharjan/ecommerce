<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title = $this->faker->name();
        return [
            'title' => 'Banner ' . $title,
            'slug' => Str::slug($title),
            'image' => $this->faker->image('public/uploads', 1000, 400, null, false),
            'description' => $this->faker->realText(200, 3),
            'status' => 'active',
        ];
    }
}
