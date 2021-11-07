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
        \App\Models\Category::query()->truncate();
        \App\Models\Brand::query()->truncate();
        \App\Models\Product::query()->truncate();
        // \App\Models\User::factory(10)->create();
        \App\Models\Category::factory(10)->create();
        
        \App\Models\Brand::factory(10)->create();
        
        \App\Models\Product::factory(50)->create();
        // $this->call([
        //     CategoriesTableSeeder::class
        // ]);
    }
}
