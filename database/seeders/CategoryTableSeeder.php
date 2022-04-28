<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'title' => 'Cosmetics',
                'slug' => 'cosmetics',
                'description' => 'Cosmetics are defined as “items with mild action on the human body for the purpose of cleaning, beautifying, adding to the attractiveness, altering the appearance, or keeping or promoting the skin or hair in good condition” while functional cosmetics, even if falling under the cosmetic definition, are designated as “items fulfilling specific actions like skin whitening, minimizing the appearance of lines in the face and body, protecting from the sun and sun tanning”.',
                'order_level' => 1,
            ],
            [
                'title' => 'Groceries',
                'slug' => 'groceries',
                'description' => 'Grocery Items means supply items, non-food items, foodstuffs and drinks including, without limitation, any or all of the following: (i) dairy products (including without limitation milk, yogurt, ice cream, cheese and/or any other items commonly found in a grocery store and/or supermarket dairy section), (ii) produce (including without limitation vegetables, fruits and/or any other items commonly found in a grocery store and/or supermarket produce section), (iii) coffee (including without limitation whole bean, ground and by the cup), tea and candies (including without limitation packaged, bulk, and full service chocolates, confections, and other items commonly found in a grocery store and/or supermarket candy section), (iv) nuts, snack mixes, and other bulk food items, (v) bakery products (including without limitation fresh breads, desserts and/or any other items commonly found in a grocery store and/or supermarket bakery section), (vi) meat (including without limitation beef, pork and poultry), (vii) seafood (including without limitation fish, shellfish, and crustaceans), (viii) liquor, beer, wine and/or other alcoholic beverages, (ix) sandwich, deli and convenient meal solution items (including without limitation sushi, deli meats, and deli cheeses), and (x) vitamins, herbs and supplements.',
                'order_level' => 2,
            ],
            [
                'title' => 'Shoes',
                'slug' => 'shoes',
                'description' => 'A shoe is an item of footwear intended to protect and comfort the human foot. Shoes are also used as an item of decoration and fashion. The design of shoes has varied enormously through time and from culture to culture, with form originally being tied to function. Though the human foot can adapt to varied terrains and climate conditions, it is still vulnerable to environmental hazards such as sharp rocks and temperature extremes, which shoes protect against. Some shoes are worn as safety equipment, such as steel-toe boots which are required footwear at industrial worksites.',
                'order_level' => 3,
            ]
        ]);

        DB::table('attribute_category')->insert([
            [
                'category_id' => 1,
                'attribute_id' => 1
            ],
            [
                'category_id' => 1,
                'attribute_id' => 2
            ],
            [
                'category_id' => 1,
                'attribute_id' => 3
            ],
            [
                'category_id' => 2,
                'attribute_id' => 1
            ],
            [
                'category_id' => 2,
                'attribute_id' => 2
            ],
            [
                'category_id' => 2,
                'attribute_id' => 3
            ],
            [
                'category_id' => 3,
                'attribute_id' => 1
            ],
            [
                'category_id' => 3,
                'attribute_id' => 2
            ],
            [
                'category_id' => 3,
                'attribute_id' => 3
            ],
        ]);
    }
}
