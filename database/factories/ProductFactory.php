<?php

namespace Database\Factories;

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
    public function definition()
    {
        return [
            'name' => fake()->name,
            'description' => fake()->paragraph,
            'short_description' => fake()->sentence,
            'price' => fake()->randomFloat(),
            'sale_price' => fake()->randomFloat(),
            'feature' => fake()->boolean(),
            'image' => fake()->imageUrl(640, 480, 'animals', true),
            'category_id'=> fake()->randomElement(\App\Models\Category::pluck('id')),
        ];
    }
}
