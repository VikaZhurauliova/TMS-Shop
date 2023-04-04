<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'short_description' => $this->faker->sentence(),
            'category_id' => Category::query()->inRandomOrder()->first()->id,
            'image' => 'https://source.unsplash.com/random/640x480',
            'is_active' => 1,
            'price' => rand(5, 2000)
        ];
    }
}
