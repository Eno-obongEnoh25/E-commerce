<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'item_category' => 'computing',
        ]);

        Category::create([
            'item_category' => 'Household Appliances',
        ]);

        Category::create([
            'item_category' => 'Electronics',
        ]);

        Category::create([
            'item_category' => 'Phones and Tablets',
        ]);
    }
}
