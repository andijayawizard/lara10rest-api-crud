<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $author = User::pluck('id');
        return [
            'user_id' => $this->faker->randomElement($author),
            'acak' => $this->faker->word(),
            'slug' => $this->faker->word(),
            'nama' => $this->faker->sentence(),
            'rgks' => $this->faker->paragraph(),
            'ktrg' => $this->faker->paragraph()
        ];
    }
}
