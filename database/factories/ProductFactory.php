<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'category_id' => rand(1, 3),
            'price' => rand(100, 10000),
            'discount_option' => 1,
            'user_id' => 1,
        ];
    }
}
