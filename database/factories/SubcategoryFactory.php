<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubcategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'subcetagory_name'=> 'this subcetagory name',
            'subcetagory_icon'=> 'this subcetagory icon',
            'subcetagory_slug'=> 'this subcetagory slug',
            'cetagories_id' => 1,

        ];
    }
}
