<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SupSubcetagoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sup_subcategories_name'=> 'this subcetagory name',
            'sup_subcategories_icon'=> 'this subcetagory icon',
            'sup_subcategories_slug'=> 'this subcetagory slug',
            'subcategories_id' => 1,
        ];
    }
}
