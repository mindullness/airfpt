<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RoutesFactory extends Factory
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
            'id'=>$this->faker->tinyInteger(3),
            'origin'=>$this->faker->char(3),
            'destination'=>$this->faker->char(3),
            'depart_time'=>$this->faker->time("H:i:s"),
            'duration'=>$this->faker->unsignedSmallInteger()
        ];
    }
}
