<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->name();
        return [
            'title' => 'Banner ' . $title,
            'slug' => Str::slug($title),
            'image' => $title,
            'description' => $this->faker->realText(200, 3),
            'status' => 1,
        ];
    }
}
