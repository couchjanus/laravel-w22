<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'status' => $this->faker->boolean,
            'created_at'=> $this->faker->dateTimeBetween($startData='-3 years', $endData='now', $timezone= 'Europe/Kiev'),
            'updated_at'=> $this->faker->dateTimeBetween($startData='-2 years', $endData='now', $timezone= 'Europe/Kiev'),
            'deleted_at'=> $this->faker->dateTimeBetween($startData='-1 years', $endData='now', $timezone= 'Europe/Kiev'),
        ];
    }
}
