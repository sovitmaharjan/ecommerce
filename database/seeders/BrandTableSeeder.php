<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->insert([
            [
                'title' => 'Nivea',
                'slug' => 'nivea',
            ],
            [
                'title' => 'Dove',
                'slug' => 'dove',
            ],
            [
                'title' => 'Head & Shoulders',
                'slug' => 'head-&-shoulders',
            ]
        ]);
    }
}
