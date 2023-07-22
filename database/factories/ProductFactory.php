<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\odel=Product>
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
            'name'=> $this->faker->name,
            'price' =>$this->faker->numberBetween( 0, 10),
            'feature_image' => $this->faker->imageUrl,
            'content' => $this->faker->paragraph,
            'user_id' =>$this->faker->numberBetween( 0, 10),
            'category_id' =>$this->faker-> numberBetween(0,100),
            'feature_image_name' =>$this->faker->word,
            'counts' => $this->faker-> numberBetween(0,100)
        ];
    }
}
