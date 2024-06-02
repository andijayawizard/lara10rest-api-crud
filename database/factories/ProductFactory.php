<?php

namespace Database\Factories;

use App\Models\Brand;
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
        $brand = Brand::pluck('id');
        return [
            'brand_id' => $this->faker->randomElement($brand),
            'nama' => $this->faker->sentence(),
            'slug' => $this->faker->sentence(),
            'rgks' => $this->faker->sentence(),
            'ktrg' => $this->faker->paragraph(),
            'acak' => $this->faker->word()
        ];
    }
}
