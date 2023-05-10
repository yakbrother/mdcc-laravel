<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'excerpt' => fake()->sentence(),
            'body' => fake()->paragraphs(10, true),
            'user_id' => User::factory(),
        ];
    }
}
