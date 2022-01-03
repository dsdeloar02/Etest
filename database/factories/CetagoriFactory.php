<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CetagoriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cetagorie_name'=> $this->faker->name(),
            'cetagorie_icon'=> $this->faker->imageUrl($width = 640, $height = 480)(),
            'cetagorie_slug'=> $this->faker->slug(),
        ];
    }
}
