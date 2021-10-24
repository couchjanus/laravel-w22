<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Cats', 'status' => 1],
            ['name' => 'Dogs', 'status' => 1],
            ['name' => 'Rats', 'status' => 0]
        ];
        \DB::delete('delete from categories');
        foreach ($categories as $category){
            \DB::table('categories')->insert([
                'name' => $category['name'],
                'status' => $category['status'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        };
    }
}
