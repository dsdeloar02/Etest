<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CurrencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'currencies_name'=> 'this currencies name',
            'currencies_icon'=> 'this currencies icon',
            'currencies_slug'=> 'this currencies slug',
        ];
    }
}
