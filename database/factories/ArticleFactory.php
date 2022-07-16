<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'image' => fake()->imageUrl(1110,265),
            'author' => fake()->name(),
            'comments' => fake()->randomDigit(),
            'created_at' => now()
        ];
    }
}
