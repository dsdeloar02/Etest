<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Database\Seeders\CurrencySeeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CetagorySeeder::class,
            SubcetagorySeeder::class,
            SupSubcetagorySeeder::class,
            CurrencySeeder::class,
        ]);
    }
}
