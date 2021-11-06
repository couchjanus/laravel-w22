<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $brands = \DB::table('brands')->pluck('id');
        $categories = \DB::table('categories')->pluck('id');
 
        return [
         'name' => $this->faker->word(),
         'description' => $this->faker->text($maxNbChars = 200),
         'price' => $this->faker->numberBetween(19,499),
         'status' => $this->faker->boolean(),
         'brand_id' => $this->faker->randomElement($brands),
         'category_id' => $this->faker->randomElement($categories),
         'created_at' => $this->faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now', $timezone = 'Europe/Kiev'),
         'updated_at' => $this->faker->dateTimeBetween($startDate = '-2 years', $endDate = 'now', $timezone = 'Europe/Kiev'),

        ];
    }
}
