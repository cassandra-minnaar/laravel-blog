<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->unique()->word(),
            'slug' =>$this->faker->unique()->slug()

        ];
    }
}
// 'name' => $this->faker->word, Original encountered SQLSSTATE[23000] catagories name when using seeder/ create something
            // 'slug' => $this->faker->slug
