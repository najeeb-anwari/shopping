<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Foodgrains, Oil & Masala'
        ]);
        Category::create([
            'name' => 'Fruits & Vegetables'
        ]);
        Category::create([
            'name' => 'Meat, Breakfast & Diary'
        ]);
        Category::create([
            'name' => 'Canned Food, Pickles & Ketchups'
        ]);
        Category::create([
            'name' => 'Snacks, Cookies & Candies'
        ]);
        Category::create([
            'name' => 'Beverages & Cigarettes'
        ]);
        Category::create([
            'name' => 'Cleaning & Households'
        ]);
        Category::create([
            'name' => 'Beauty & Care, Baby Needs'
        ]);
        Category::create([
            'name' => 'Health & Nutrition'
        ]);
        Category::create([
            'name' => 'Aid Packages'
        ]);
        Category::create([
            'name' => 'Dry Fruits'
        ]);
    }
}
