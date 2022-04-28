<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([
            [
                'title' => 'Color',
                'slug' => 'color',
            ],
            [
                'title' => 'Size',
                'slug' => 'size',
            ],
            [
                'title' => 'Weight',
                'slug' => 'weight',
            ]
        ]);
    }
}
