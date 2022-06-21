<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'topic' => $this->faker->sentence(),
            'title' => $this->faker->sentence(),
            'content'=> $this->faker->text(),

            'image' => $this->faker->imageUrl(640,480),
            'created_at' => $this->faker->date("Y-m-d H:i:s")
        ];
    }
}
