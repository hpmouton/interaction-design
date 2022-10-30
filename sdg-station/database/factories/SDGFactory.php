<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

//Model imports
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SDG>
 */
class SDGFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sdg_name' => fake()->name(),
            'sdg_description' => fake()->sentence(),
            'category_id' => Category::all()->random()->id
        ];
    }
}
