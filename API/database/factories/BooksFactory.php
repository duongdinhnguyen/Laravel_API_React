<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Books>
 */
class BooksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->faker->name(),
            'category_id' => $this->faker->numberBetween(1,8),
            'quantity' => $this->faker->numberBetween(1,50),
            'book_code' => 'Book'. $this->faker->unique()->numberBetween(100,1000),
            'author' => $this->faker->name(),
            'avatar' => $this->faker->image(),
        ];
    }
}
