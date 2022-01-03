<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CetagoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cetagories_name'=> 'this cetagory name',
            'cetagories_icon'=> 'this cetagory icon',
            'cetagories_slug'=> 'this cetagory slug',
        ];
    }
}
